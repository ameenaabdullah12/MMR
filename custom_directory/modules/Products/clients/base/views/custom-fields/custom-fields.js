/**
 * @class View.Views.Base.QuickCreateView
 * @alias SUGAR.App.view.views.BaseQuickCreateView
 * @extends View.Views.Base.BaseeditmodalView
 */
({
    

    extendsFrom: 'BaseeditmodalView',
    fallbackFieldTemplate: 'edit',
    initialize: function (options) {
        app.view.View.prototype.initialize.call(this, options);
        if (this.layout) {
            this.layout.on('app:view:custom-fields', function () {
                this.render();
                this.$('.modal').modal({
                    backdrop: 'static'
                });
                this.$('.modal').modal('show');
                $('.datepicker.dropdown-menu').css('z-index', '1051');
                app.$contentEl.attr('aria-hidden', true);
                $('.modal-backdrop').insertAfter($('.modal'));

                /**If any validation error occurs, system will throw error and we need to enable the buttons back*/
                this.context.get('model').on('error:validation', function () {
                    app.alert.show("custom-fields-errors", { level: "error", messages: "Please resolve any errors before proceeding." });
                    this.disableButtons(false);
                }, this);
            }, this);
        }
        this.bindDataChange();
    },
    /**Overriding the base saveButton method*/
    saveButton: function () {
        var customFieldsModel = this.context.get('model');

        this.$('[name=save_button]').attr('data-loading-text', app.lang.get('LBL_LOADING'));
        this.$('[name=save_button]').button('loading');

        /** Disable the buttons during save.*/
        this.disableButtons(true);
        this.processModel(customFieldsModel);

        //If this is in edit view, don't save, but just validate the model
        if (customFieldsModel.modelView == "edit"){
            var self = this;
            customFieldsModel.doValidate(this.getFields(this.module),function(isValid,errors){
                if (isValid) {
                    self.saveComplete();
                }
                else{
                    app.alert.show("custom-fields-errors", { level: "error", messages: "Please resolve any errors before proceeding." });
                    self.disableButtons(false);
                }
            })
            
        }
        //If it's in list view, then we need to fully save the bean
        else{
            customFieldsModel.save(null, {
                fieldsToValidate: this.getFields(this.module),
                success: _.bind(function () {
                    this.saveComplete();
                }, this),
                error: _.bind(function () {
                    this.disableButtons(false);
                }, this)

            });
        }
    },
    /**Overriding the base cancelButton method*/
    cancelButton: function () {
        app.alert.dismiss("custom-fields-errors");
        this._super('cancelButton');
        app.$contentEl.removeAttr('aria-hidden');
        this._disposeView();
    },
    /**Overriding the base saveComplete method*/
    saveComplete: function () {
        app.alert.dismiss("custom-fields-errors");
        this.$('.modal').modal('hide').find('form').get(0).reset();
        //reset the `Save` button
        this.disableButtons(false);
        app.$contentEl.removeAttr('aria-hidden');
        this._disposeView();
    },
    /**Custom method to dispose the view*/
    _disposeView: function () {
        /**Find the index of the view in the components list of the layout*/
        var index = _.indexOf(this.layout._components, _.findWhere(this.layout._components, { name: 'custom-fields' }));
        if (index > -1) {
            /** dispose the view so that the evnets, context elements etc created by it will be released*/
            this.layout._components[index].dispose();
            /**remove the view from the components list**/
            this.layout._components.splice(index, 1);
        }
    },
})