({
	// Use RecordView (edit element) or CreateView (new element) 
	extendsFrom: 'RecordView',
	
	initialize: function(options) {

		this._super('initialize', [options]);

		//add validation tasks
		app.error.errorName2Keys['supplier_approver'] = 'ERROR_SUPPLIER_APPROVER';
		

		// Set an event to trigger the function to auto-populate the data, for example, this is triggered when the value of some field channges
		//this.model.on('change:approved_c', this._checkApprover, this);
		
		//add validation tasks
        this.model.addValidationTask('supplier_approver', _.bind(this._doValidateCheckSupplier, this));

	},

	
	_doValidateCheckSupplier: function(fields, errors, callback) {
        
		
		var supplierTeam = _.findWhere(app.user.get('my_teams'), {name: "Supplier Approver"});
        var supplierAdmin = supplierTeam ? supplierTeam.name : '';
		
		
		if (   (this.model.get('approved_c') 			== true)
			&& (this.model.previous('approved_c') 		== false)
			&& (supplierAdmin  							!= "Supplier Approver")
		   )
		{
			errors['approved_c'] = errors['approved_c'] || {};
			errors['approved_c'].supplier_approver = true;
			app.alert.show('message-id', {
				level: 'error',
				messages: 'You are not authorised to approve new suppliers!',
				autoClose: true
			});
		}				
		

        callback(null, fields, errors);
    },
	
})