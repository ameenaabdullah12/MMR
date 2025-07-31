/**
 * @class View.Fields.Base.EnumField.Lookup
 * @alias SUGAR.App.view.fields.LookupEnumField
 * @extends View.Fields.Base.BaseField.EnumField
 */
({
    //Inherit most dropdown logic
    extendsFrom: 'EnumField',

    /**
     * Override the enum options to retrieve values
     * @private
     */
    loadEnumOptions: function (fetch, callback) {

        var self = this;

        var token = App.api.getOAuthToken();

        var endpoint;

        var list = {};
        //Depending on the field, call the relevant API endpoint
        if (this.name == "a_default_currency") {
            //While it would be great to call app.metadata.getCurrencies(), 
            //it doesn't include the id, so we need to 
            //add the default currency, then call the API for the rest
            var defaultCurrency = App.metadata.getCurrency("-99");
            list["-99"] = defaultCurrency.iso4217 + " - " + defaultCurrency.name;

            endpoint = "Currencies?fields=id,name,symbol";
        }
        else if (this.name == "a_default_vat") {
            endpoint = "TaxRates?fields=id,name,list_order";
        }

        app.api.call('GET', app.api.buildURL(endpoint), null, {
            beforeSend: function (request) {
                request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
            },
            success: function (data) {

                var theRecords = data.records;

                //If this was TaxRates, we need to respect list_order
                if (endpoint == "TaxRates?fields=id,name,list_order"){
                    theRecords = theRecords.sort(function(a,b){
                        return a.list_order - b.list_order;
                    })
                }

                //For each record returned by the API
                for (i = 0; i < theRecords.length; i++) {

                    //Add the key-value pair to the object to be returned
                    var key = theRecords[i].id;
                    var value = theRecords[i].name;
                    list[key] = value;
                }
                //Set the element's items, and fire the callback function
                self.items = list;
                callback.call(self);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
            }
        });    
    },
})