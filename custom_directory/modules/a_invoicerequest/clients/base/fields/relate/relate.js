({
  extendsFrom:'RelateField',
  initialize:function(options)
  {
    this._super('initialize', [options]);
  }, //Set the filter specifically for a_address to limit to its account
  instantiateInitialFilters:function(record,filter_source_field,filter_target_field,filter_name,filter_text)
  {
    var config_object=new Object();
    config_object['initial_filter']=filter_name;
    config_object['initial_filter_label']=filter_text;
    if (filter_target_field!=null)
    {
      config_object['filter_populate']=new Object();
      config_object['filter_populate'][filter_target_field]=[filter_source_field];
      config_object['filter_relate']=new Object();
      config_object['filter_relate'][filter_target_field]=[filter_source_field];
    }
    this._filterOptions=new app.utils.FilterOptions()
    .config(config_object)
    .populateRelate(record)
    .format();
  },
  
              
  //a_invoicerequest_accountsaccounts_ida
  //opportunities_a_invoicerequest_1opportunities_ida
  
  getFilterOptions:function(force)
  {
    if(this._filterOptions&& !force)
    {
      return this._filterOptions;
    }
    var use_default=true;
    var account_id='';
	
	
	
    if(this.getSearchModule()=="Contacts"&&this.def.name=="a_invoicerequest_contacts_name"&& !_.isEmpty(this.model.get('a_invoicerequest_accountsaccounts_ida')))
    {
      //app.logger.debug(this);
      use_default=false;
	  var account_id=this.model.get('a_invoicerequest_accountsaccounts_ida');
      this.instantiateInitialFilters(this.model,account_id,'account_id','filterContactsByAccountId','Filter by account id');
    }
    if(use_default==true)
    {
      this._filterOptions=new app.utils.FilterOptions()
      .config(this.def)
      .setInitialFilter(this.def.initial_filter||'$relate')
      .populateRelate(this.model)
      .format();
    }
    return this._filterOptions;
  },
  initiateSelectDrawerFilter:function(filter_target_field,filter_source_field,filter_name,filter_text)
  {
    var config_object=new Object();
    config_object['initial_filter']=filter_name;
    config_object['initial_filter_label']=filter_text;
    if (filter_target_field!=null)
    {
      config_object['filter_populate']=new Object();
      config_object['filter_populate'][filter_target_field]=[filter_source_field];
    }
    /*
    * !! Important: the above way of creating an object is mandatory in this case, due to javascript's weakness and lax enforcement
    * of object logic. If you would use {filter_target_field:[...]} it would create a field named "filter_target_field"
    * instead of parsing from the parameter of the function
     */

    var filter=new app.utils.FilterOptions()
    .config(config_object)
    .format();
    return filter;
  },
  instantiateSelectDrawer:function(module_name,filter,filter_target_field)
  {
    var searchFields=this.getSearchFields();
    searchFields.push(filter_target_field);
    app.drawer.open({
                      layout:'parent-selection-list',
                      context:
                        {
                          module:module_name,
                          fields:searchFields,
                          filterOptions:filter
                        }
                    },
                    _.bind(this.setValue, this)
    );
  },
  //The drawer specifically requires the filter parameter for a_address to be an array
  openSelectDrawer:function()
  {
    var use_default=true;
	var account_id=this.model.get('a_invoicerequest_accountsaccounts_ida');

    if(this.getSearchModule()=="Contacts"&&this.def.name=="a_invoicerequest_contacts_name"&&account_id!=null&&account_id!="")
    {
      use_default=false;
      var filter=this.initiateSelectDrawerFilter("account_id",account_id,"filterContactsByAccountId","Filtered by account id");
      app.logger.info(account_id);
      this.instantiateSelectDrawer("Contacts",filter,"account_id");
    }
    if (use_default)
    {
      this._super('openSelectDrawer');
    }
  }
})