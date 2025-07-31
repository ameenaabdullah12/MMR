({
  extendsFrom: "CreateView",

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
});
