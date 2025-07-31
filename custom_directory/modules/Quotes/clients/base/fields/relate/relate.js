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
  /*
              CRMDEV-1453
              @author Nagy Zoltan
              Copy billing address to shipping address
               */
  _copyBillingAddressToShipping:function()
  {
    /*
    CRMDEV-1453
     */
    app.logger.debug("Copy over billing address to shipping");
    var billing_address=this.model.get("billing_address");
    var billing_address_street=this.model.get("billing_address_street");
    var billing_address_city=this.model.get("billing_address_city");
    var billing_address_state=this.model.get("billing_address_state");
    var billing_address_postalcode=this.model.get("billing_address_postalcode");
    var billing_address_country=this.model.get("billing_address_country");

    var shipping_address=this.model.get("shipping_address");
    var shipping_address_street=this.model.get("shipping_address_street");
    var shipping_address_city=this.model.get("shipping_address_city");
    var shipping_address_state=this.model.get("shipping_address_state");
    var shipping_address_postalcode=this.model.get("shipping_address_postalcode");
    var shipping_address_country=this.model.get("shipping_address_country");

    if ((billing_address!=""||billing_address!=null)&&(shipping_address==""||shipping_address==null||shipping_address==undefined))
    {
      this.model.set("shipping_address",billing_address);
    }
    if ((billing_address_city!=""||billing_address_city!=null)&&(shipping_address_city==""||shipping_address_city==null||shipping_address_city==undefined))
    {
      this.model.set("shipping_address_city",billing_address_city);
    }
    if ((billing_address_street!=""||billing_address_street!=null)&&(shipping_address_street==""||shipping_address_street==null||shipping_address_street==undefined))
    {
      this.model.set("shipping_address_street",billing_address_street);
    }
    if ((billing_address_state!=""||billing_address_state!=null)&&(shipping_address_state==""||shipping_address_state==null||shipping_address_state==undefined))
    {
      this.model.set("shipping_address_state",billing_address_state);
    }
    if ((billing_address_postalcode!=""||billing_address_postalcode!=null)&&(shipping_address_postalcode==""||shipping_address_postalcode==null||shipping_address_postalcode==undefined))
    {
      this.model.set("shipping_address_postalcode",billing_address_postalcode);
    }
    if ((billing_address_country!=""||billing_address_country!=null)&&(shipping_address_country==""||shipping_address_country==null||shipping_address_country==undefined))
    {
      this.model.set("shipping_address_country",billing_address_country);
    }
  },
  /**
   * Handles update of related fields.
   *
   * @param {Object} model The source model attributes.
   */
  //NEVER call super, as this only works by completly replacing the parent function
  updateRelatedFields: function(model) {
    var newData = {},
      self = this;
    _.each(this.def.populate_list, function(target, source) {
      source = _.isNumber(source) ? target : source;
      if (!_.isUndefined(model[source]) && app.acl.hasAccessToModel('edit', this.model, target)) {
        var before = this.model.get(target),
          after = model[source];

        if (before !== after) {
          newData[target] = model[source];
        }
      }
    }, this);

    if (_.isEmpty(newData)) {
      return;
    }

    // if this.def.auto_populate is true set new data and doesn't show alert message
    if (!_.isUndefined(this.def.auto_populate) && this.def.auto_populate == true) {
      // if we have a currency_id, set it first to trigger the currency conversion before setting
      // the values to the model, this prevents double conversion from happening
      if (!_.isUndefined(newData.currency_id)) {
        this.model.set({currency_id: newData.currency_id});
        delete newData.currency_id;
      }
      this.model.set(newData);
      return;
    }

    // load template key for confirmation message from defs or use default
    //app.logger.debug(this.getSearchModule());
    //original one uses the search module but only for label we can hardcode
    var messageTplKey = this.def.populate_confirm_label || 'LBL_CONFIRM_BILLING_SHIPPING_POPUP',
      messageTpl = Handlebars.compile(app.lang.get(messageTplKey, "Quotes")),
      fieldMessageTpl = app.template.getField(
        this.type,
        'overwrite-confirmation',
        this.model.module),
      messages = [],
      relatedModuleSingular = app.lang.getModuleName(this.def.module);

    _.each(newData, function(value, field) {
      var before = this.model.get(field),
        after = value;

      if (before !== after) {
        var def = this.model.fields[field];
        messages.push(fieldMessageTpl({
                                        before: before,
                                        after: after,
                                        field_label: app.lang.get(def.label || def.vname || field, this.module)
                                      }));
      }
    }, this);

    app.alert.show('overwrite_confirmation', {
      level: 'confirmation',
      messages: messageTpl({
                             values: new Handlebars.SafeString(messages.join(', ')),
                             moduleSingularLower: relatedModuleSingular.toLowerCase()
                           }),
      onConfirm: function() {
        // if we have a currency_id, set it first to trigger the currency conversion before setting
        // the values to the model, this prevents double conversion from happening
        if (!_.isUndefined(newData.currency_id)) {
          self.model.set({currency_id: newData.currency_id});
          delete newData.currency_id;
        }
        self.model.set(newData);
        if (self.def.name=="billing_account_name")
        {
          self._copyBillingAddressToShipping(); //context changed
          //ALWAYS check for def.name, as this code is executed for ALL relate fields
        }
      }
    });
  },
  /*
  END CRMDEV-1453
   */
  getFilterOptions:function(force)
  {
    if(this._filterOptions&& !force)
    {
      return this._filterOptions;
    }
    var use_default=true;
    var shipping_account_id=this.model.get('shipping_account_id');
    if(this.getSearchModule()=="a_address")
    {
      use_default=false;
      this.instantiateInitialFilters(this.model,shipping_account_id,'account_id','filterByAccountId','Addresses for Account');
    }
    if (this.getSearchModule()=="Accounts")
    {
      app.logger.debug("Activate active account filter OPTIONS");
      use_default=false;
      this.instantiateInitialFilters(this.model,"1","active_c","filterAccountsByActive","LBL_ACTIVE_ACCOUNT");
    }
    var account_id=this.model.get('billing_account_id');
    if(this.getSearchModule()=="Contacts"&&this.def.name=="billing_contact_name"&& !_.isEmpty(this.model.get('billing_account_id')))
    {
      use_default=false;
      this.instantiateInitialFilters(this.model,account_id,'account_id','filterContactsByAccountId','Filter by account id');
    }
    if(this.getSearchModule()=="Contacts"&&this.def.name=="shipping_contact_name"&& !_.isEmpty(this.model.get('shipping_account_id')))
    {
      //app.logger.debug(this);
      use_default=false;
      this.instantiateInitialFilters(this.model,shipping_account_id,'account_id','filterContactsByAccountId','Filter by account id');
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
    var shipping_account_id=this.model.get('shipping_account_id');
    var account_id=this.model.get('billing_account_id');
    if(this.getSearchModule()=="a_address")
    {
      use_default=false;
      var filter=this.initiateSelectDrawerFilter("account_id",shipping_account_id,"filterByAccountId","Addresses for Account");
      this.instantiateSelectDrawer("a_address",filter,"account_id");
    }
    if (this.getSearchModule()=="Accounts")
    {
      //app.logger.debug("Activate active account filter");
      use_default=false;
      var filter=this.initiateSelectDrawerFilter("active_c",1,"filterAccountsByActive","LBL_ACTIVE_ACCOUNT");
      this.instantiateSelectDrawer("Accounts",filter,"active_c");
    }
    if(this.getSearchModule()=="Contacts"&&this.def.name=="billing_contact_name"&&account_id!=null&&account_id!="")
    {
      use_default=false;
      var filter=this.initiateSelectDrawerFilter("account_id",account_id,"filterContactsByAccountId","Filtered by account id");
      app.logger.info(account_id);
      this.instantiateSelectDrawer("Contacts",filter,"account_id");
    }
    if(this.getSearchModule()=="Contacts"&&this.def.name=="shipping_contact_name"&&shipping_account_id!=null&&shipping_account_id!="")
    {
      use_default=false;
      var filter=this.initiateSelectDrawerFilter("account_id",shipping_account_id,"filterContactsByAccountId","Filtered by account id");
      this.instantiateSelectDrawer("Contacts",filter,"account_id");
    }
    if (use_default)
    {
      this._super('openSelectDrawer');
    }
  }
})