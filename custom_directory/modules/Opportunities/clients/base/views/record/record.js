({
  extendsFrom: "RecordView",

  initialize: function (options) {
    this.events = _.extend({}, this.events, {
      "change [data-name=expert_sensory_checkbox_c]": "generatePopup",
    });
    this._super("initialize", [options]);
  },
  generatePopup() {
    if (
      !_.isUndefined(this.model) &&
      !_.isUndefined(this.model.get("expert_sensory_checkbox_c")) &&
      this.model.get("expert_sensory_checkbox_c") == true
    ) {
      App.alert.show("message-id", {
        level: "warning",
        messages:
          "Please navigate to the “Sensory Team” tab to complete the required information",
        autoClose: true,
        autoCloseDelay: 5000,
      });
    }
  },
  
  setupDuplicateFields: function (prefill) {

		// MMR [PW 16-MAR-2023] Custom Duplicate / Copy fields

//        this._super('setupDuplicateFields', prefill);
	/**
     * @inheritdoc
     */
    //setupDuplicateFields: function(prefill) {
        // Clear sugar predict fields
		/*
		const predictFields = [
            'ai_opp_conv_score_enum',
            'ai_opp_conv_score_enum_c'
        ];
        predictFields.forEach(fieldName => prefill.unset(fieldName));
		*/
        if (app.metadata.getModule('Opportunities', 'config').opps_view_by === 'RevenueLineItems') {
            var calcFields = this.getCalculatedFields();
            if (calcFields) {
                _.each(calcFields, function(field) {
                    prefill.unset(field.name);
                }, this);
            }
        };

	
	
        var fields = [
			'name',
			'account_id',
			'account_name',
			'contacts_opportunities_1contacts_ida',
			'contacts_opportunities_1_name',
			'date_closed',
			'description',
			'client_code_c',
			'csd_team_c',
			'mmr_group_lead_c',
			'modelez_sector_c',
			'opportunity_programme_c',
			'overcode_name_c',
			'pepsico_category_c',
			'pepsico_region_c',
			'unilever_category_c',
			'unilever_location_c',
			'bus_dev_c',
			'ferrero_brand_c',
			'mars_brand_c',
			'mars_division_c',
			'nestle_division_c',
			'auto_master_c',
			'danone_category_c',
			'mondelez_brand_c',
			'mondelez_category_c'

        ];

        //determines whether the field list above is a set of allowlisted (allowed) or denylisted (denied) fields
        var denylist = false;

        if (denylist) {
            _.each(fields, function (field) {
                if (field && prefill.has(field)) {
                    //set denylist field to the default value if exists
                    if (!_.isUndefined(prefill.fields[field]) && !_.isUndefined(prefill.fields[field].default)) {
                        prefill.set(field, prefill.fields[field].default);
                    } else {
                        prefill.unset(field);
                    }
                }
            });
        } else {
            _.each(prefill.fields, function (value, field) {
                if (!_.contains(fields, field)) {
                    if (!_.isUndefined(prefill.fields[field].default)) {
                        prefill.set(field, prefill.fields[field].default);
                    } else {
                        prefill.unset(field);
                    }
                }
            });
        }

    }
  
});
