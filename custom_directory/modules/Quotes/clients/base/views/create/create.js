({
    extendsFrom: 'QuotesCreateView',

    allowAnyCurrency: false,
    _copyBillingAddressToShipping:function()
    {
      /*
      CRMDEV-1453
       */
      app.logger.info("Quotes ==> Copy over billing address to shipping");
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
    initialize: function (options){
        this._super('initialize', [options]);

        this._removeCopyButton();

        this.model.on("change:billing_account_id", this._initialiseAccountData , this);
        app.logger.info("Quotes==> initialize is being run");
        this.model.on("change:billing_contact_name", this._copyBillingContactToShipping , this);
        /*
        !!!! ATENTION !!!!
        ONly run this on CREATE not EDIT
         */
        this._copyBillingAddressToShipping();
        this._copyBillingAccountToShipping();
        /*
        !!1 END !!
         */
    },

    //While it would be easier to remove via metadata, Sugar can add the copy button back
    //Therefore, we need to remove the copy button in case users manipulate the layout
    _removeCopyButton: function () {
        for (var p = 0; p < this.meta.panels.length; p++) {
            for (var f = 0; f < this.meta.panels[p].fields.length; f++) {
                if (this.meta.panels[p].fields[f].name == "shipping_address") {
                    for (var i = 0; i < this.meta.panels[p].fields[f].fields.length; i++) {
                        if (this.meta.panels[p].fields[f].fields[i].type == "copy") {
                            this.meta.panels[p].fields[f].fields.splice([i], 1);
                            return;
                        }
                    }
                }
            }
        }
    },
    _copyBillingContactToShipping:function()
    {
      var contact_id=this.model.get("billing_contact_id");
      var contact_name=this.model.get("billing_contact_name");
      var shipping_contact_id=this.model.get("shipping_contact_id");
      if (contact_id!=null&&contact_id!=""&&(shipping_contact_id==null||shipping_contact_id==""))
      {
        app.logger.info("Copy over contact name: "+contact_id+" to shipping");
        this.model.set("shipping_contact_id", contact_id);
        this.model.set("shipping_contact_name", contact_name);
      }
    },
  _copyBillingAccountToShipping:function()
  {
    app.logger.info("Quotes ==> _copyBillingAccountToShipping is being run");
    var account_id=this.model.get("billing_account_id");
    var account_name=this.model.get("billing_account_name");
    var shipping_account_id=this.model.get("shipping_account_id");
    if (account_id!=null&&account_id!=""&&(shipping_account_id==null||shipping_account_id==""))
    {
      app.logger.info("Copy over account name: "+account_id+" to shipping");
      this.model.set("shipping_account_id", account_id);
      this.model.set("shipping_account_name", account_name);
    }
  },
    //This sets the currency and VAT properties once the Account is selected
    _initialiseAccountData: function () {
        //Introducing conditional statement to ensure Account can't be changed if line items exist
        var previousValue = this.model._previousAttributes.billing_account_id;
        var previousName = this.model._previousAttributes.billing_account_name;
        var newValue = this.model.get("billing_account_id");
        app.logger.info("Quotes ==> _initialiseAccountData is being run");

        //If there are no Line Items
        if (!this._hasQuoteLineItems()) {
          /*
              CRMDEV-1394
              Billing account ==> shippin account
              @author: Nagy Zoltan
               */
          this._copyBillingAccountToShipping();
          /*
          END CRMDEV-1394
           */
            //At this point, it's fine, but we don't want to fire this logic if the ID is blank
            if (newValue != "") {
                var self = this;

                var accountBean = app.data.createBean("Accounts", { id: newValue });
                accountBean.fetch({
                    fields: ["a_default_currency", "a_default_vat", "a_any_currency"],
                    success: function (account) {
                        self.allowAnyCurrency = account.get("a_any_currency");
                        self.model.set("currency_id", account.get("a_default_currency"));
                        var taxRateBean = app.data.createBean("TaxRates", { id: account.get("a_default_vat") });
                        taxRateBean.fetch({
                            success: function (taxRate) {
                                self.model.set("taxrate_id", taxRate.get("id"));
                                self.model.set("taxrate_name", taxRate.get("name"));
                                self.model.set("taxrate_value", taxRate.get("value"));
                            }
                        })
                    }
                });
            }
        }
        //However, if it does have line items, set to previous value and alert the user
        else {
            this.model.set("billing_account_id", previousValue);
            this.model.set("billing_account_name", previousName);
            app.alert.show("account_change_quote_line_items_exist", {
                level: "error",
                messages: "You must remove all Quote Line Items before changing the Billing Account."
            })
        }
    },

    //Helper function to determine if there are any QLIs - unfortunately as the view/layout is different for record/create, we need to replicate
    _hasQuoteLineItems: function () {
        var bundles = this.model.get("bundles");
        for (var i = 0; i < bundles.length; i++) {
            if (bundles.models[i].get("product_bundle_items").length > 0) {
                return true;
            }
        }
    },


    _setAccountInfo: function (accountInfoData) {
        this._super('_setAccountInfo', [accountInfoData]);

        if (accountInfoData.hasOwnProperty('id') && (this.isConvertFromShippingOrBilling === 'billing' || this.model.get("opportunity_id"))){
            var self = this;

            this.model.set("currency_id", accountInfoData.a_default_currency);
            var taxRateBean = app.data.createBean("TaxRates", { id: accountInfoData.a_default_vat });
            taxRateBean.fetch({
                success: function (taxRate) {
                    self.model.set("taxrate_id", taxRate.get("id"));
                    self.model.set("taxrate_name", taxRate.get("name"));
                    self.model.set("taxrate_value", taxRate.get("value"));
                }
            });
        }
    },
})