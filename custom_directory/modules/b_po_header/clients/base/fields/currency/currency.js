{
	extendsFrom: 'CurrencyField',	
	initialize: function(options) {
		this._super('initialize', [options]);

	},
	render: function() {
		 // Hide drop down for this module
		this.hideCurrencyDropdown = true;    
		 this._super("render");
	},
}
