({
    extendsFrom: "ProductBundlesQuoteDataGroupHeaderView",

    _onCreateQLIBtnClicked: function (evt) {
        if (this.context.get("parentModel").get("billing_account_id")) {
            app.alert.dismiss("no_billing_account_selected");
            this._super("_onCreateQLIBtnClicked", [evt]);
        }
        else {
            app.alert.show("no_billing_account_selected", {
                level: "error",
                messages: "You must select a Billing Account before adding Quote Line Items."
            })
        }
    },
})