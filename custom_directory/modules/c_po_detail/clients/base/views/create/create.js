{
 extendsFrom: 'CreateView',
 initialize: function(options) {
     this._super('initialize', [options]);
 },
 render: function() {
     // Check if there's related parent record
     if (!_.isEmpty(this.model.link)) {
         //
		 this.model.attributes.dimensions_database_detail_c=this.model.link.bean.attributes.dimensions_database_c;
		 this.model.attributes.c_po_detail_type=this.model.link.bean.attributes.b_po_header_type;
		 this.model.attributes.currency_id=this.model.link.bean.attributes.currency_id;
		 //this.model.attributes.currency2_id_c=this.model.link.bean.attributes.currency_id;
		//this.model.attributes.contacts_udef_invoice_requests_1contacts_ida=this.model.link.bean.attributes.contacts_opportunities_1contacts_ida;
		 //this.model.attributes.contacts_udef_invoice_requests_1_name=this.model.link.bean.attributes.contacts_opportunities_1_name;
		 // Default opp PO number
		 //this.model.attributes.client_po=this.model.link.bean.attributes.po_number_c;
     }
     this._super("render");
 },
}