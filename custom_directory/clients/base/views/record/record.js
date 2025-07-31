({
    extendsFrom: 'RecordView',

    /**
     * CRMDEV-1241 - Unsetting of c_primary_key when copying any record
     * @author Richard Coleman
     */
    setupDuplicateFields: function(prefill) {
        prefill.unset("c_primary_key");
    },
})