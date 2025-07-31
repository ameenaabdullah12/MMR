({
    extendsFrom: 'RelateField',
    initialize: function(options) {
        this._super('initialize', [options]);
    },
    getFilterOptions: function(force) {
		//**PO Custom Relate [PW]
		
		self=this;
		var database = new Array(self.model.get('dimensions_database_c'));
		var grand_total_gbp =  self.model.get('grand_total_gbp_c'); 
		
        if (this._filterOptions && !force) {
            return this._filterOptions;
        }
		
		//Defining our filter definition  *** BASED ON MODULE ***
		if ((this.getSearchModule() == "a_supplier") && (self.action =="edit"))
		{
			
			var custom_FilterOptions = new app.utils.FilterOptions().config({
				'initial_filter': 'filterSupplier',
				 'initial_filter_label': 'LBL_FILTER_SUPPLIER',
				 'filter_populate': {
					 'dimensions_database_c': database,
					 'supplier_code_c': '%',
				 }
			}).populateRelate(this.model).format();
		}
		
		if ((this.getSearchModule() == "Users") && (self.action =="edit"))
		{
			//Defining our filter definition
			var custom_FilterOptions = new app.utils.FilterOptions().config({
				'initial_filter': 'filterUserTemplate',
				'initial_filter_label': 'LBL_FILTER_USER_TEMPLATE',
				'filter_populate': {
						 'dimensions_database_c': database,
						 'approval_level_gbp_c': grand_total_gbp,
					 }
			}).populateRelate(this.model).format();
		}


        //Assigning our filter definitions 
        this._filterOptions = custom_FilterOptions;
        return this._filterOptions;
    },
    openSelectDrawer: function() {
        app.drawer.open({
            layout: 'selection-list',
            context: {
                module: this.getSearchModule(),
                fields: this.getSearchFields(),
                filterOptions: this.getFilterOptions()
            }
        }, _.bind(this.setValue, this));
    },

})