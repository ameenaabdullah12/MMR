({
    className: 'row-fluid',

    events: {
        'click [name=cancel_button]': 'cancelAddDocument',
        'click [name=save_button]': 'addDocument',
        'change #document-attachment': 'documentSelected',
        'change #ddDocTypesAdd' : 'docTypeChangedEvent'
    },

    //Call parent initialize function, and provide Account name to UI
    initialize: function (options) {
        this._super('initialize',[options]);
        this.title = this.context.get('title');
    },

    //When the form is rendered, prompt the user for a file
    render: function(options){
        this._super('render', [options]);
        $("#document-attachment").click();

        var dropdownValues = this.context.get("docTypeList");
        $.each(dropdownValues[0].options, function (key, option){
            $("#ddDocTypesAdd").append($('<option>',{
                value : option.value,
                text : option.text
            }));
        });
        var docType = this.context.get("docType");
        $("#ddDocTypesAdd").val(docType);
        $("#ddDocTypesAdd").select2();

        //Get the list of tags for the document type in question
        this.getDocumentTypeTagFields(docType);
    },

    //When the document is selected, populate the filename (minus extension) as a default
    documentSelected: function(event){
        var file = $(event.currentTarget)[0].files[0].name;
        var fileName = file.substr(0, file.lastIndexOf('.'));
        $("#document-title").val(fileName);
        $("#document-title").focus();
    },

    //Close the drawer without adding document
    cancelAddDocument: function () {
        app.drawer.close("cancel");
    },

    //Add a document to the instance of document
    addDocument: function () {

        var self = this;

        //Attach the document from the DOM
        var file = $("#document-attachment")[0].files[0];
        var name = $("#document-title").val() ? $("#document-title").val() : file.name;
        var formData = new FormData();
        formData.append('file', file);
        formData.append("docType", $("#ddDocTypesAdd").val());
        formData.append("guid", this.context.get("guid"));
        formData.append("name", name);

        var success = true;

        //Check each tag field. If valid, add it to the form, otherwise report errors
        $(".ADM_tag_field").each(function(){
            var value = self.validateCustomTag(this);
            if (value === false){
                self.showTemporaryError("Please check that all fields contain valid data.");
                $(this.parentElement).addClass("error");
                success = false;
            }
            else{
                $(this.parentElement).removeClass("error");
                formData.append(this.id, value);
            }
        });

        //If there was a validation failure, terminate the script here
        if (!success){
            return;
        }

        //Validate that a title has been entered, and a document has been attached
        app.alert.show('processing-document', {
            level: 'process',
            title: 'Adding Document...'
        });

        $.ajax({
            url: app.api.buildURL("Document/Add"),
            beforeSend: function (request) {
                request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
            },
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            //Upon receiving the document types, set it to the first document type, and display documents
            success: function (data) {
                app.alert.dismiss('processing-document');
                app.alert.dismiss('Error');
                app.drawer.close("success");
                app.alert.show('document-added', {
                    level: 'success',
                    messages: 'Your document has been added.',
                    autoClose: true
                });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                app.alert.dismiss('processing-document');

                self.showTemporaryError("There was a problem uploading the file.");
            }
        });
    },
    //Get tags for the given document type from the document API
    getDocumentTypeTagFields: function (docType){

        var self = this;
        $.ajax({
            url: app.api.buildURL("Document/Types/" + docType),
            beforeSend: function (request) {
                request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
            },
            type: 'GET',
            success: function (data) {
                //Build the HTML to be added
                var customTagsHTML = "";
                $.each(data.Tags, function(key, obj){
                    if (obj.Tag.Name != "CRM ID"){
                        customTagsHTML += self.addTagEntryFieldToForm(obj.Tag, obj.hasOwnProperty("ReadOnly"));
                    }
                });
                //Add the HTML into the DOM, and initialise the date/time pickers
                $("#customTags").html(customTagsHTML);
                $(".ADM_tag_field.datepicker").datepicker({ format: self.getDatePlaceholder()});
                $(".ui-timepicker-input").timepicker({timeFormat : app.user.getPreference("timepref")});
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                app.alert.dismiss('processing-document');

                self.showTemporaryError(errorThrown);
            }
        });
    },
    //Convert the JSON "tag" object into CRM terms
    addTagEntryFieldToForm: function(tag,hidden){
        var dataType = "text";
        var inputType = "text";
        var classNames = "ADM_tag_field ";
        var inputStyle = "";
        var prepend = "";
        var append = "";
        var otherAttributes = "";
        var hideDiv = "";

        if(hidden){
            hideDiv = "display:none;";
        }

        switch (tag.DataType) {
            case "String" :
                otherAttributes = 'maxlength="' + tag.FieldLength + '"';
                break;
            case "Number" :
                dataType = "float"
                break;
            case "DateTime" :
                classNames += "datepicker";
                dataType = "date";
                prepend = '<div class="input-append date datetime">';
                otherAttributes = 'placeholder ="' + this.getDatePlaceholder() + '"';
                append = '<span class="add-on date" data-icon="calendar"><i class="fa fa-calendar"></i></span>' +
                    '<input style="margin-left:-14px;" class="ui-timepicker-input" type="text" placeholder="' + this.getTimePlaceholder() + '"/>' + 
                    '<span class="add-on time" data-action="show-timepicker" tabindex="-1"><i class="fa fa-clock-o"></i></span></div>';
                break;
            case "Boolean" :
                dataType = "bool";
                inputType = "checkbox";
                inputStyle += "margin: 8px 7px 4px 7px;"
                break;
        }
        return '<div class="row-fluid panel_body panel_body" style="padding: 0 13px;box-sizing:border-box;margin-bottom:16px;' + hideDiv + '">' +
            '<div class="span6 record-cell edit" data-type="' + dataType +'" data-name="custom-tag-' + tag.Id + '">' +
            '<div class="record-label" data-name="custom-tag-' + tag.Id + '">'+ tag.Name  + '</div>' + prepend +
                '<input data-type="' + dataType +'" id="custom-tag-' + tag.Id + '" style="' + inputStyle + 
                    '" class="' + classNames + '" type="' + inputType + '" ' + otherAttributes + ' />' + append +
            '</div>' +
        '</div>';
    },
    //Reload the custom fields for the new Document Type
    docTypeChangedEvent : function(event){
        var docTypeId = $(event.currentTarget).val();
        this.getDocumentTypeTagFields(docTypeId);
    },

    //Show placeholder text for date field based on user preferences
    getDatePlaceholder : function(){
        return app.date.toDatepickerFormat(app.user.getPreference("datepref"));
    },

    //Show placeholder text for time field based on user preferences
    getTimePlaceholder : function(){
        return app.date.getUserTimeFormat().replace(/[HhiaA]/g, function (s) {
            return {
                'H': 'h',
                'h': 'h',
                'i': 'mm',
                'a': '',
                'A': ''
            }[s]
        });
    },

    //Confirm that values entered into the fields are valid
    validateCustomTag : function(element){
        var result = element.value;
        switch (element.dataset.type) {
            case "float" :
                //If the length is greater than 0
                if (result.length > 0){
                    //Fail validation if value entered is NaN
                    if (isNaN(parseFloat(result))) {
                        result = false;
                    }
                }
                //Otherwise, nothing was entered, return 0
                else{
                    result = 0;
                }

                break;

            case "date" :
                //Fail validation if the date is not valid
                var date = this.getDateTimeValue(element);
                if (date == undefined){
                    return false;
                }
                result = date;
                break;

            case "bool" :
                //Convert the on/off value to a true or false string (not boolean as that will report failure)
                if (element.checked){
                    result = "true"
                }
                else{
                    result = "false"
                }
                break;
        }
        return result;
    },

    //Show a given error message
    showTemporaryError : function(message){
        app.alert.show('Error', {
            level: 'error',
            messages: message,
            autoClose: true
        });
    },

    //Take the values in the date and time fields and convert to ISO8601 format
    getDateTimeValue : function(element){

        var datefield = $(element);
        var timeField = datefield.siblings(".ui-timepicker-input");

        var value = $.trim(datefield.val() + " " + timeField.val());

        //If the value is blank, just return that
        if (value == ""){
            return value;
        }
        //If the time is empty, set the value to 00:00, but preserve the format for the isValid() function
        if (timeField.val() == ""){
            value = value + " " + app.date.getUserTimeFormat().replace(/[HM]/gi,"0");
        }

        value = app.date(value, app.date.convertFormat(app.user.getPreference('datepref') + " " + app.user.getPreference('timepref')), true);

        if (!value.isValid()) {
            return;
        }

        //Return the value in correct format
        return value.format();
    }
})