/**
 * MMR Customization in initDashlet to support filter sharing
 * Not required for Sugar 10, required only for Sugar 9
 */
({
    extendsFrom: 'DashablelistView',

    /**
     * {@inheritDoc}
     */
    initialize: function(options) {
        this._super('initialize', [options]);
    },

    /**
     * In case the filter for the dashlet has been retrieved successfully
     * a filter definition based dashlet setup will be triggered.
     *
     *  @param {Object} data object from specified filter request.
     */
    triggerDashletSetup: function(data) {
        this.filterIsAccessible = true;
        this._displayDashlet(data.filter_definition);
    },

    /**
     * Must implement this method as a part of the contract with the Dashlet
     * plugin. Kicks off the various paths associated with a dashlet:
     * Configuration, preview, and display.
     *
     * @param {String} view The name of the view as defined by the `oninit`
     *   callback in {@link DashletView#onAttach}.
     */
    initDashlet: function(view) {
        if (this.meta.config) {
            // keep the display_columns and label fields in sync with the selected module when configuring a dashlet
            this.settings.on('change:module', function(model, moduleName) {
                var label = (model.get('filter_id') === 'assigned_to_me') ? 'TPL_DASHLET_MY_MODULE' : 'LBL_MODULE_NAME';
                model.set('label', app.lang.get(label, moduleName, {
                    module: app.lang.getModuleName(moduleName, {plural: true})
                }));

                // Re-initialize the filterpanel with the new module.
                this.dashModel.set('module', moduleName);
                this.dashModel.set('filter_id', 'assigned_to_me');
                this.layout.trigger('dashlet:filter:reinitialize');

                this._updateDisplayColumns();
                this.updateLinkedFields(moduleName);
            }, this);
            this.settings.on('change:intelligent', function(model, intelligent) {
                this.setLinkedFieldVisibility('1', intelligent);
            }, this);
            this.on('render', function() {
                var isVisible = !_.isEmpty(this.settings.get('linked_fields')) ? '1' : '0';
                this.setLinkedFieldVisibility(isVisible, this.settings.get('intelligent'));
            }, this);
        }
        this._initializeSettings();
        this.metaFields = this._getColumnsForDisplay();

        if (this.settings.get('intelligent') == '1') {

            var link = this.settings.get('linked_fields');
            var model = app.controller.context.get('model');
            var module = this.settings.get('module');
            var options = {
                link: {
                    name: link,
                    bean: model
                }
            };
            this.collection = app.data.createBeanCollection(module, null, options);
            this.collection.setOption('relate', true);
            this.context.set('collection', this.collection);
            this.context.set('link', link);
        } else {
            this.context.unset('link');
        }

        this.before('render', function() {
            if (!this.moduleIsAvailable) {
                this.$el.html(this._noAccessTemplate());
                return false;
            }
            if (!this.filterIsAccessible) {
                this._displayNoFilterAccess();
                return false;
            }
        });

        // the pivot point for the various dashlet paths
        if (this.meta.config) {
            this._configureDashlet();
            this.listenTo(this.layout, 'init', this._addFilterComponent);
            this.listenTo(this.layout.context, 'filter:add', this.updateDashletFilterAndSave);
            this.layout.before('dashletconfig:save', function() {
                this.saveDashletFilter();
                // NOTE: This prevents the drawer from closing prematurely.
                return false;
            }, this);

        } else if (this.moduleIsAvailable) {
            var filterId = this.settings.get('filter_id');
            if (!filterId || this.meta.preview) {
                this._displayDashlet();
                return;
            }

            var filters = app.data.createBeanCollection('Filters');
            filters.setModuleName(this.settings.get('module'));
            filters.load({
                success: _.bind(function() {
                    if (this.disposed) {
                        return;
                    }
                    var filter = filters.collection.get(filterId);
                    var filterDef = filter && filter.get('filter_definition');
                    // MMR - Customization in next 5 lines
                    // Required only for Sugar 9 not required for 10
                    // In case the filter assigned to the list-dashlet is NOT in the filters collection,
                    // as collection only contains certain number (= max_filters) of entries.
                    // Will make a separate api call to fetch the specified filter data.
                    if (!filterDef) {
                        var url = app.api.buildURL('Filters/' + filterId, null, null);
                        app.api.call('read', url, null, {
                            success: _.bind(this.triggerDashletSetup, this),
                            error: _.bind(this._displayNoFilterAccess, this)
                        });
                    // MMR - End Customization
                    } else if (_.isUndefined(filterDef)) {
                        this.filterIsAccessible = false;
                        this._displayNoFilterAccess();
                    } else {
                        this._displayDashlet(filterDef);
                    }
                }, this),
                error: _.bind(function() {
                    if (this.disposed) {
                        return;
                    }
                    this._displayDashlet();
                }, this)
            });
        }
    },

})
