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
 * @class View.Fields.Base.Products.QuoteDataRelateField
 * @alias SUGAR.App.view.fields.BaseProductsQuoteDataRelateField
 * @extends View.Fields.Base.BaseRelateField
 */
({
    extendsFrom: 'BaseRelateField',

    
    initialize: function(options) {
        this._super('initialize', [options]);
        //If the VAT for this item has not already been set, default the taxrate from the parent
        if (! this.model.get("vat_rate_name") && this.context.parent.attributes.model.get("taxrate_id")){
            this.model.set("vat_rate",this.context.parent.attributes.model.get("taxrate_id"));
            this.model.set("vat_rate_name",this.context.parent.attributes.model.get("taxrate_name"));
        }
    },

    format: function(value) {
        var idList;
        value = value || this.model.get('vat_rate_name');
		value2 = this.model.get("vat_rate");
        var $select2 = $(this.$el).children("input").first().data('select2');
        //If there is no value, but there is a VAT rate ID, we need to save the text as the value
        if ((! value) && this.model.get("vat_rate") && this.action == "list"){
			console.log("TEST4");
            value = $select2.selection.find('span').text();
            value = value ? value.trim() : value;
            this.model.set("vat_rate_name", value);
        }
        

        this._super('format', [value]);

        if (value) {
            idList =  this.model.get('vat_rate');
            if (_.isArray(value)) {
                this.formattedIds = idList.join(this._separator);
            } else {
                this.formattedIds = idList;
            }

            if (_.isEmpty(this.formattedIds)) {
                this.formattedIds = value;
            }
        }

        return value;
    },
})
