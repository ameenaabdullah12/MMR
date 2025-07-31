({
    iconClick: {
        'click .custom-fields': 'openModal',
    },

    rowLayout: {},

    /**
     * @inheritdoc
     */
    initialize: function (options) {
        this._super('initialize', [options]);

        //Append the event for the icon click to the list of current events
        if (this.events) {
            _.extend(this.events, this.iconClick)
        } else {
            this.events = this.iconClick;
        }
        //Store the layout object for later use (as the field layout is undefined)
        this.rowLayout = this.view.layout;
    },

    openModal: function () {
        //TODO: Check if this conditional statement is really required
        if (Modernizr.touch) {
            app.$contentEl.addClass('content-overflow-visible');
        }
        //Check if the layout already exists, and fetch the product details
        var customFieldsView = this.rowLayout.getComponent('custom-fields');
        if (!customFieldsView) {
            //Create a new context based on the Product model
            var context = app.context.getContext({
                module: 'Products',
                model: this.model,
            });
            context.prepare();
            //Pull through the metadata from custom-fields to obtain field details
            customFieldsView = app.view.createView({
                context: context,
                name: 'custom-fields',
                layout: this.rowLayout,
                module: context.module,
            });
            //Push the modal into the DOM, and trigger it appearing
            this.rowLayout._components.push(customFieldsView);
            this.rowLayout.$el.append(customFieldsView.$el);
            this.rowLayout.trigger("app:view:custom-fields");
        }
    }
})