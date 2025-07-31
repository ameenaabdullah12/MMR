({
    className: 'document-search',

    events: {
        'click [name=cancel_button]': 'cancelSearch',
    },

    //Close the drawer
    cancelSearch: function () {
        app.drawer.close();
    },
})