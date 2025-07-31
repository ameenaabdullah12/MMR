({
  extendsFrom: 'LinkActionField',
  initialize:function(options)
  {
    this._super('initialize', [options]);
  },
  instantiateInitialFilters:function(filter_source_field,filter_target_field,filter_name,filter_text)
  {
    var config_object=new Object();
    config_object['initial_filter']=filter_name;
    config_object['initial_filter_label']=filter_text;
    config_object['filter_populate']=new Object();
    config_object['filter_populate'][filter_target_field]=[filter_source_field];
    var filterOptions=new app.utils.FilterOptions()
    .config(config_object)
    .format();
    return filterOptions;
  },
  openSelectDrawer:function()
  {
    if (this.isDisabled()) {
      return;
    }
    var parentModel = this.context.get('parentModel');
    var linkModule = this.context.get('module');
    var link = this.context.get('link');
    var context = {
      module: linkModule,
      recParentModel: parentModel,
      recLink: link,
      recContext: this.context,
      recView: this.view
    }
    //this code will execute for all contact subpanel,to apply the filter only for opportunities we will give a condition
    if(_.isEqual(this.context.get('parentModel').get('_module'),"Opportunities")){
      var account_id=this.context.get('parentModel').get('account_id');
      if (account_id!=null&&account_id!="")
      {
        var filterOptions=this.instantiateInitialFilters(account_id, "account_id", "filterContactsByAccountId", "LBL_ACCOUNT_ID_CONTACT");
        //filterOptions.populateRelate(parentModel);
        context=_.extend(context, {
          filterOptions:filterOptions
        });
      }
      app.logger.info("Filter applied for account Id: "+account_id);
      //console.log(context);
    }
    app.drawer.open({
      layout:'multi-selection-list-link',
      context:context
      }, _.bind(this.selectDrawerCallback, this)
      );
  }
})