{
	extendsFrom: 'CurrencyField',	
	initialize: function(options) {
		this._super('initialize', [options]);

	},
	render: function() {
		 // Hide drop down for this module
		this.hideCurrencyDropdown = true;
		if (this.model.isNew() && (!this.model.isCopy())) {
			this.model.set('currency_id', this.model.link.bean.attributes.currency_id);
			//this.model.get('currency2_id_c')
		}
		this._super("render");
		
	},
}
