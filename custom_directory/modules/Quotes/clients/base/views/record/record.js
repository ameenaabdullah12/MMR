({

    extendsFrom: "QuotesRecordView",

    allowAnyCurrency: false,

    initialize: function (options) {

        this._super("initialize", [options]);

        this._removeCopyButton();

        this.model.on("change:billing_account_id", this._initialiseAccountData, this);
        this.model.on("change:billing_contact_name", this._copyBillingContactToShipping , this);

        this.context.on("button:confirm_order:click", this._promptUserToConfirmOrder, this);

        this.model.on('sync', this.toggleButtons, this);
    },

    /*
    Copy billing contact name to shippinh
     */
    _copyBillingContactToShipping:function()
    {
        var contact_id=this.model.get("billing_contact_id");
        var shipping_contact_id=this.model.get("shipping_contact_id");
        var contact_name=this.model.get("billing_contact_name");
        if (contact_id!=null&&contact_id!=""&&(shipping_contact_id==null||shipping_contact_id==""))
        {
            app.logger.debug("Copy over contact name: "+contact_id+" to shipping");
            this.model.set("shipping_contact_id", contact_id);
            this.model.set("shipping_contact_name", contact_name);
        }
    },
    _copyBillingAccountToShipping:function()
    {
        var account_id=this.model.get("billing_account_id");
        var account_name=this.model.get("billing_account_name");
        var shipping_account_id=this.model.get("shipping_account_id");
        if (account_id!=null&&account_id!=""&&(shipping_account_id==null||shipping_account_id==""))
        {
            app.logger.debug("Copy over account name: "+account_id+" to shipping");
            this.model.set("shipping_account_id", account_id);
            this.model.set("shipping_account_name", account_name);
        }
    },
    //Overrides the toggleButtons function to disable create order button if ordered
    toggleButtons: function(enable){
        this._super('toggleButtons', [enable]);

        _.each(this.buttons.main_dropdown.fields, function (button) {
            if (button.name == "create_order" && this._isQuoteConverted() === true) {
                button.setDisabled(true);
            }
        }, this);
    },

    //While it would be easier to remove via metadata, Sugar can add the copy button back
    //Therefore, we need to remove the copy button in case users manipulate the layout
    _removeCopyButton: function(){
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

    //This sets the currency and VAT properties once the Account is selected
    _initialiseAccountData: function () {
        //Introducing conditional statement to ensure Account can't be changed if line items exist
        var previousValue = this.model._previousAttributes.billing_account_id;
        var previousName = this.model._previousAttributes.billing_account_name;
        var newValue = this.model.get("billing_account_id");

        //If the value is undefined, the model hasn't yet loaded, do nothing
        if (typeof(previousValue) !== "undefined"){

            //If there are no Line Items, or there was there was no Account previously set
            if (!this._hasQuoteLineItems()){
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
                if (newValue != ""){
                    var self = this;

                    var accountBean = app.data.createBean("Accounts", { id: newValue });
                    accountBean.fetch({
                        fields: ["a_default_currency", "a_default_vat","a_any_currency"],
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
        }
        //If the model is just loading, we want to grab just the Any Currency value
        else{
            this._fetchAnyCurrency(newValue);
        }
    },

    //Helper function to determine if there are any QLIs
    _hasQuoteLineItems: function () {
        var bundles = this.model.get("bundles");
        for (var i = 0; i < bundles.length; i++) {
            if (bundles.models[i].get("product_bundle_items").length > 0) {
                return true;
            }
        }
    },

    _promptUserToConfirmOrder: function (fields, errors, callback) {
        //If the order has not been placed yet, prompt user for confirmation
        if (this._isQuoteConverted() === false) {

            var self = this;

            var confirmationMessage = '';

            var accountBean = app.data.createBean("Accounts", { id: this.model.get("billing_account_id") });
            accountBean.fetch({
                fields: ["name", "account_type"],
                success: function(account){
                    if (self._isAccountProspect(account)) {
                        confirmationMessage = "Creating the order will convert the Account '" + account.get("name") + "' to a Customer.<br><br>";
                    }
                    confirmationMessage = confirmationMessage.concat("Are you sure you wish to convert this Quote to an Order?");
                    app.alert.show("confirmOrder", {
                        level: "confirmation",
                        messages: confirmationMessage,
                        onConfirm: function(){
                            self._convertQuoteToOrder(self.model, account);
                        },
                    });
                },
                //If there was an error retrieving the data
                error: function(data){
                    app.alert.show("unknownError", {
                        level: "error",
                        messages: "There was an error when converting the Quote. Please check and try again.",
                    });
                }
            });
        } else {
            app.alert.show("OrderAlreadyConverted", {
                level: "error",
                messages: "This Quote has already been converted to an Order.",
                autoClose: true
            });
        }
    },

    _isAccountProspect : function(account){
        var accountType = account.get("account_type");
        if (accountType && accountType == "Prospect"){
            return true;
        }
    },

    _isQuoteConverted : function(){
        var converted = this.model.get("a_ordered");
        return converted;
    },

    _convertQuoteToOrder: function (quote, account){
        var self = this;
        quote.save({"a_ordered": true},{
            success: function(quote){
                app.alert.show("orderCreated", {
                    level: "success",
                    messages: "The Quote has been converted to an Order.",
                    autoClose: true
                });
                self.toggleButtons(true);
            },
            error: function (data) {
                app.alert.show("unknownError", {
                    level: "error",
                    messages: "There was an error when converting the Quote. Please check the details and try again.",
                });
            }
        });

        if (this._isAccountProspect(account)){
            this._setAccountToCustomer(account);
        }
    },

    _setAccountToCustomer: function(account) {
        account.save({ "account_type": "Customer"},{
            success: function (account) {
                app.alert.show("accountChangedToCustomer", {
                    level: "success",
                    messages: "The Account '" + account.get("name") + "' has been converted to a Customer.",
                    autoClose: true
                })
            },
            error: function (data) {
                app.alert.show("unknownError", {
                    level: "error",
                    messages: "There was an error when changing the Account to a Customer. Please check the details and try again.",
                });
            }
        });
    },
    _setAllowAnyCurrency: function (allow)
    {
        this.allowAnyCurrency=allow;
    },
    //Returns the Any Currency value of the Quote's Account
    //TODO - Attempt to see if we can remove this round trip via means of a related field/non-db lookup (like billing_account_name)

    _fetchAnyCurrency: function (accountId)
    {
        var self = this;
        var accountBean = app.data.createBean("Accounts", { id: accountId });
        accountBean.fetch({
            fields: ["a_any_currency"],
            success: function (account) {
                self._setAllowAnyCurrency(account.get("a_any_currency"));
            }
        });
    },
})