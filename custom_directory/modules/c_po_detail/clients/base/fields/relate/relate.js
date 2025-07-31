({
    extendsFrom: 'RelateField',
    initialize: function(options) {
        this._super('initialize', [options]);
    },
    getFilterOptions: function(force) {
		//**PO Custom Relate Opp [PW]
		
		self=this;
		var sales_stage = ["Commissioned", "Closed (Debriefed)"];			//new Array(self.model.get('dimensions_database_c'));
		
        if (this._filterOptions && !force) {
            return this._filterOptions;
        }
		
		//Defining our filter definition  *** BASED ON MODULE ***
		if ((this.getSearchModule() == "Opportunities") && (self.action =="edit"))
		{
			
			var custom_FilterOptions = new app.utils.FilterOptions().config({
				'initial_filter': 'filterOpportunitiyLive',
				 'initial_filter_label': 'LBL_FILTER_OPPORTUNITY_LIVE',
				 'filter_populate': {
					 'sales_stage': sales_stage,
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