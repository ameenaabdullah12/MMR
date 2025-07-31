({
    extendsFrom: 'PanelTopView',

    initialize: function (options) {
        this._super('initialize', [options]);

        // Update last activity data from backend, once a related record is created
        let parentModel = this.context.parent.get('model');
        if (parentModel && parentModel.module == 'Contacts') {
            let newModel = this.context.get('model');
            if (newModel.module == 'Opportunities' || newModel.module == 'Meetings' || newModel.module == 'Emails') {
                this.context.parent.on('panel-top:refresh', function () {
                    parentModel.dataFetched && parentModel.fetch();
                }, this);

                this.on('linked-model:create', function () {
                    parentModel.dataFetched && parentModel.fetch();
                }, this);
            }
        }
    }
})