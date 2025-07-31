{
 extendsFrom: 'CreateView',
 initialize: function(options) {
     this._super('initialize', [options]);
 },
 render: function() {
     // Check if there's related parent record
     if (!_.isEmpty(this.model.link)) {
         // Populate hidden field a_invoicerequest_accountsaccounts_ida with opportunity's account_id (Account GUID)
         this.model.attributes.a_invoicerequest_accountsaccounts_ida=this.model.link.bean.attributes.account_id;
         // Populate account_name_c with opportunity's account_name (Actual name of Account)
         this.model.attributes.a_invoicerequest_accounts_name=this.model.link.bean.attributes.account_name;
		 // Default opp PO number
		 this.model.attributes.client_po=this.model.link.bean.attributes.po_number_c;
     }
     this._super("render");
 },
}