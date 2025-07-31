({
    plugins: ['Dashlet'],

    /**
     * Hubspot profile url
     */
    hubspotProfileUrl: undefined,

    /**
     * Height for iFrame element
     */
    frameHeight: undefined,

    /**
     * Overriding initDashlet to setup values needed to render our contextual dashlet
     */
    initDashlet: function() {
        var self = this;
        var ctx = self.context;
        var model = ctx.get("model");
        if (!this.meta.config) {
            var options = {};
            options.hubspotProfileUrlTemplate = this.settings.get('hubspotProfileUrlTemplate');
            self.frameHeight = this.settings.get('frameHeight');
        }

        var url = app.api.buildURL(self.module, null, {
            id: model.get('id')
        });

        app.api.call('read', url, null, {
            success: _.bind(function (data) {
                var profileUrl = options.hubspotProfileUrlTemplate;
                if (data) {
                    if (data.hubspot_portal_id_c && data.hubspot_id_c) {
                        profileUrl = profileUrl.replace("{hubspot_portal_id_c}", data.hubspot_portal_id_c);
                        profileUrl = profileUrl.replace("{hubspot_id_c}", data.hubspot_id_c);
                        self.hubspotProfileUrl = profileUrl;
                        self.render();
                    }
                }
            }, this)
        })
    }
});