({
	// Use RecordView (edit element) or CreateView (new element) 
	extendsFrom: 'CreateView',
	
	initialize: function(options) {

	this._super('initialize', [options]);

		//add validation tasks
		app.error.errorName2Keys['same_approver'] = 'ERROR_SAME_APPROVER_MESSAGE';
		app.error.errorName2Keys['not_approver'] = 'ERROR_NOT_APPROVER_MESSAGE';
		app.error.errorName2Keys['check_po'] = 'ERROR_PO_SUPPLIER_DB';
		app.error.errorName2Keys['check_po_approval_limit'] = 'ERROR_PO_APPROVER_LEVEL';
		
		// Set an event to trigger the function to auto-populate the data, for example, this is triggered when the value of some field channges
		this.model.on('change:a_supplier_b_po_header_1a_supplier_ida', this._initialiseSupplierData, this);
		this.model.on('change:assigned_user_id', this._checkNewApprover, this);
				
        //this.model.addValidationTask('check_approver', _.bind(this._doValidateCheckApprover, this));
		this.model.addValidationTask('check_po', _.bind(this._doValidateCheckPO, this));
	},

	_initialiseSupplierData: function(){

		// Read the value of the field and save it into a variable, you can use the self.model.get directly too
		var supplier_id = this.model.get("a_supplier_b_po_header_1a_supplier_ida");
		
		// If the value of the field is not empty i run the rest of the code to get the data to populate the related field
		if(supplier_id != ""){

	        var self = this;

			var supplierBean = app.data.createBean("a_supplier", { id: supplier_id });
			supplierBean.fetch({
				fields: ["a_default_currency"],
				success: function (supplier) {
					self.model.set("currency_id", supplier.get("a_default_currency"));
				}
			});
	    }
	},
	
	_checkNewApprover: function(){

		var approver = this.model.get('assigned_user_id');
		if (approver != "")
		{
			if ((approver == app.user.get('id')) || (approver == this.model.get('created_by_id_c') ) )
			{
				this.model.set("assigned_user_id", "");
				this.model.set("assigned_user_name", "");
			}
		}
				
		
	},
	
	_doValidateCheckPO: function(fields, errors, callback) {
        
		
		if (this.model.get('dimensions_database_c') != this.model.get('supplier_db_c') )
		{
			errors['a_supplier_b_po_header_1_name'] = errors['a_supplier_b_po_header_1_name'] || {};
			errors['a_supplier_b_po_header_1_name'].check_po = true;
		}				
		
		if (this.model.get('dimensions_database_c') == "" )
		{
			errors['dimensions_database_c'] = errors['dimensions_database_c'] || {};
			errors['dimensions_database_c'].required = true;
		}
		
		if (this.model.get('assigned_user_name') == "" )
		{
			errors['assigned_user_name'] = errors['assigned_user_name'] || {};
			errors['assigned_user_name'].required = true;
		}
		
		if ((this.model.get('grand_total_gbp_c') > 0 ) && (this.model.get('request_approval_c') == true) )
		{
			if (this.model.get('approver_limit_c') < this.model.get('grand_total_gbp_c') )
			{
				errors['assigned_user_name'] = errors['assigned_user_name'] || {};
				errors['assigned_user_name'].check_po_approval_limit = true;
			}
		}
		
        callback(null, fields, errors);
    },

})