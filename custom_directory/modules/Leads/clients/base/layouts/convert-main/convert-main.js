({
  extendsFrom: "LeadsConvertMainLayout",
/** show message that contact is attached  */
  convertSuccess: function (data) {
    this.convertComplete("success", "LBL_CONVERTLEAD_SUCCESS", true);
    var oppindex = _.indexOf(
      _.pluck(data["modules"], "_module"),
      "Opportunities"
    );
    var contactindex = _.indexOf(
      _.pluck(data["modules"], "_module"),
      "Contacts"
    );
    if (oppindex != -1) {
      var url = window.location.origin + window.location.pathname + "#";
      var opplink = data["modules"][oppindex]["name"].link(
        url + "Opportunities/" + data["modules"][oppindex]["id"]
      );
      var contactlink = data["modules"][contactindex]["name"].link(
        url + "Contacts/" + data["modules"][contactindex]["id"]
      );
      app.alert.show("convert", {
        level: "info",
        messages:
          contactlink + " is attached to " + opplink + "  primary contact",
        autoClose: true,
      });
    }
  },
});
