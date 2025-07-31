({
  className: 'back_to_workspace',
  //extendsFrom:'BaseLayout',
  workspace_url:null,
  initialize: function(options) {
    app.logger.info("INIT workspace layout");
    this.workspace_url=app.config.workspace_url;
    this._super('initialize', [options]);
  },
})