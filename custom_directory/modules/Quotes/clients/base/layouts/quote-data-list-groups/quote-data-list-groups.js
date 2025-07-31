({
    extendsFrom : "QuotesQuoteDataListGroupsLayout",

    /*
    CRMDEV-1210
    @author: Richard Coleman
    @date: 13/06/2018
    Originally, this was implemented in the product-catalog view in Quotes.
    However, it was later found that Sugar passes product-catalog a Quote context in Opportunities.
    This resulted in the validation error being presented unexpectedly in Opportunities.
    The below change implements the intended functionality but specifically in a Quotes layout.
    */
    _onProductCatalogDashletAddItem: function(productData) {

        var billing_id=this.model.get('billing_account_id');
        if (_.isEmpty(billing_id)){
            app.alert.show("no_billing_account_selected",{
                level: "error",
                messages: "You must select a Billing Account before adding Quote Line Items."
            })
        }
        else {
            this._super("_onProductCatalogDashletAddItem", [productData]);
        }

    }
})