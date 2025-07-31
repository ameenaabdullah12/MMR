({
    extendsFrom: 'LinkActionField',

    getDrawerOptions: function() {
        var parentModel = this.context.get('parentModel');
        var linkModule = this.context.get('module');
        var link = this.context.get('link');
        var filterOptions;
		
		var database = new Array(this.model.get('dimensions_database_c'));
        
		if(parentModel.module === 'a_supplier') {
            filterOptions = new app.utils.FilterOptions()
            .config({
                'initial_filter': 'filterSupplier',
                'initial_filter_label': 'LBL_FILTER_SUPPLIER',
                'filter_populate': {
                    'dimensions_database_c': database,
                }
            });
        }
        else {
            filterOptions = new app.utils.FilterOptions().config(this.def);
            filterOptions.setInitialFilter(this.def.initial_filter || '$relate');
            filterOptions.populateRelate(parentModel);
        }

        return {
            layout: 'multi-selection-list-link',
            context: {
                module: linkModule,
                recParentModel: parentModel,
                recLink: link,
                recContext: this.context,
                recView: this.view,
                independentMassCollection: true,
                filterOptions: filterOptions.format()
            }
        };
    }

})