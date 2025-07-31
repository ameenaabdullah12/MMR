({
  extendsFrom: "LeadsConvertPanelLayout",

  runCreateValidation: function (callbacks) {
    var view = this.createView,
      model = view.model;
    var fields = view.getFields(view.module);
    if (view.module == "Opportunities") {
      delete fields.contacts_opportunities_1_name;
    }
    model.doValidate(
      fields,
      _.bind(function (isValid) {
        if (isValid) {
          callbacks.valid(model);
        } else {
          callbacks.invalid(model);
        }
      }, this)
    );
  },
});
