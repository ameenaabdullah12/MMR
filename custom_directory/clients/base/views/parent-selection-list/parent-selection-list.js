({
    extendsFrom: "SelectionListView",

    _selectAndClose: function (context, selectedModel) {

        var currentModule = selectedModel.get("_module");
        var self=this;

        //This is a parent lookup for a_address
        if (currentModule == "a_address"){
            var addressAccountId = selectedModel.get('account_id');
            var shippingAccountId = context.parent.attributes.model.get('shipping_account_id');
            app.logger.info("addressAccountId : "+addressAccountId+", shippingAccountId: "+shippingAccountId);

            if (addressAccountId == shippingAccountId) {
                this._super('_selectAndClose', [context, selectedModel]);
                app.alert.dismiss('addressNotRelated');
            } else {
                app.alert.show("addressNotRelated", {
                    level: "confirmation",
                    messages: "The selected Address is not associated with the Shipping Account. Ignore?",
                    autoClose: false,
                    onConfirm:function()
                    {
                      self._super('_selectAndClose', [context, selectedModel]);
                      app.alert.dismiss('addressNotRelated');
                    },
                    onCancel:function()
                    {
                      //selectedModel.set('account_id',0); //Should be unselected, not set to 0
                    }
                });
            }
        } else {
            this._super('_selectAndClose', [context, selectedModel]);
        }
	    //this._super('_selectAndClose', [context, selectedModel]);
    }
})