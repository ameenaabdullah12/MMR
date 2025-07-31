{
	// ** MMR Opportunity Custom Currency Field Logic
	
	extendsFrom: 'CurrencyField',	
    initialize: function(options) {
        this._super('initialize', [options]);
    },
	
	
	 getCurrenciesSelectorSingle: function(template) {
        var currencies = {};

        _.each(SUGAR.App.metadata.getCurrencies(), function(currency, id) {
            currencies[id] = template(currency);
        });
        return currencies;
    },
	
	getCurrencyField: function() {

        if (!_.isNull(this._currencyField)) {
            return this._currencyField;
        }

        var currencyDef = this.model.fields[this.def.currency_field || 'currency_id'];
        currencyDef.readonly = true;
		currencyDef.type = 'enum';
        currencyDef.enum_width = '100%';
        currencyDef.searchBarThreshold = this.def.searchBarThreshold || 7;

        this._currencyField = app.view.createField({
            def: currencyDef,
            view: this.view,
            viewName: this.tplName,
            model: this.model
        });
        this._currencyField.defaultOnUndefined = false;

        return this._currencyField;
    },
	
	render: function() {
		 // Hide drop down for this module
		if (this.name == 'ct_price_to_client_c')
			this.hideCurrencyDropdown = true;    
		
		//if (this.name == 'revenue_c')
			//this.hideCurrencyDropdown = true; 
			//this.setMode = 'view';
		
 		if (this._currencyField) {
            this._currencyField.dispose();
            this._currencyField = null;
        }
        this._super('_render');
        if (this.hideCurrencyDropdown === false && this.tplName === 'edit') {
            
			this.getCurrencyField().setElement(this.$('span[sfuuid="' + this.currencySfId + '"]'));
			this.$el.find('div.select2-container').css('min-width', '16px');
			this.getCurrencyField().render();
        }
        return this;
		 
		 this._super("render");
	},
	
	
}
