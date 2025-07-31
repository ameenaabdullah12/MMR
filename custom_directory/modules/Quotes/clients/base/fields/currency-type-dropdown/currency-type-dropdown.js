/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Fields.Base.Quotes.CustomCurrencyTypeDropdownField
 * @alias SUGAR.App.view.fields.CustomBaseQuotesCurrencyTypeDropdownField
 * @extends View.Fields.Base.CurrencyTypeDropdownField
 */
({
    extendsFrom: 'QuotesCurrencyTypeDropdownField',

    //We only want this to trigger the check of Currency validation if it was a DOM event that triggered the change
    currencyEvents: {
        'change [name=currency_id]': 'handleCurrencyChange'
    },

    initialize: function (options) {
        this._super('initialize', [options]);
        if (this.events) {
            // Extend events hash with my events if one already exists  
            _.extend(this.events, this.currencyEvents)
        } else {
            // Otherwise, just use my events  
            this.events = this.currencyEvents;
        }
    },

    //If the Quote has QLIs, then reject the change
    handleCurrencyChange: function(){
        debugger;
        var previousValue = this.model._previousAttributes.currency_id;
        if (this.view._hasQuoteLineItems()){
            this.model.set("currency_id", previousValue);
            app.alert.show("currency_change_quote_line_items_exist",{
                level: "error",
                messages: "You cannot change the Currency once lines have been added."
            })
        }
        else {
            //If the Account specified does not have "Any Currency" set to true, inform user
            var self = this;
            var current_account_id=this.model.get("billing_account_id");
            var accountBean = app.data.createBean("Accounts", { id: current_account_id});
            accountBean.fetch({
                fields: ["a_any_currency"],
                success: function (account)
                {
                    if (account==null||account==""||account=="undefined")
                    {
                        return false;
                    }
                    else
                    {
                        var allowAnyCurrency=account.get("a_any_currency");
                        if (!allowAnyCurrency && previousValue){
                            self.model.set("currency_id", previousValue);
                            app.alert.show("currency_change_account_not_any_currency", {
                                level: "error",
                                messages: "You may only raise quotes in the Currency assigned to this Account unless it is marked 'Any Currency'"
                            });
                        }
                        else
                        {
                            app.alert.dismiss("currency_change_account_not_any_currency");
                            app.alert.dismiss("currency_change_quote_line_items_exist");
                        }
                    }
                }
            });
        }
    },
})