({
  plugins:['Dashlet', 'ErrorDecoration', 'GridBuilder', 'Editable', 'Audit', 'FindDuplicates', 'ToggleMoreLess', 'Tooltip'],
  events:{
    'click #btnAdd':'addButtonClickEvent',
    'click #btnSearch':'searchButtonClickEvent', //not used, this is for sugar's way only
    'click #document_search_button':"searchDocumentsByTitle", //actually used search function
    'change #ddDocTypes':'docTypesChangeEvent',
    'click [data-action=scroll]':'paginateRecord',
    'click .sorting':'sortDataEvent'
  },
  documentTypeTags:[], //When the dashlet is rendered, retrieve the document types
  allowedDocumentTypeTags:[], //store the tags we want to see
  allowedDocumentTypeTagsID:[], //will be populated AFTER we receive the allowed tags
  render:function()
  {
    this.$el.html(this.template(this.model.toJSON()));
    var select=$('#ddDocTypes');
    select.select2({placeholder:"Loading..."});
    this.getDocumentTypes();
    return this;
  }, //Open a drawer to show the add screen
  searchDocumentsByTitle:function(e)
  {
    //search document by title
    var search_title=$("#document_search_title").val();
    app.logger.debug("Search for title: "+search_title);
    var self=this;
    var docType=this.getDocTypeId();
    if (docType&&search_title)
    {
      $('#loading').removeAttr('hidden');
      $.ajax({
               url:app.api.buildURL('Document/DocumentTitle/'+search_title+'/Sortfield/DocDatePutin/DocType/'+docType+'/CRMID/'+this.model.id),
               beforeSend:function(request)
               {
                 request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
               },
               type:'GET',
               success:function(resp)
               {
                 app.logger.debug("Populate content with [ SEARCH ]");
                 app.logger.debug(resp);
                 resp=self.removeUnAllowedTagsFromContentResponse(resp,self);
                 self.populateDashletData(resp, self);
                 self.newSortColumnSelected($("#DocDatePutin"), "desc");
                 $('#loading').attr('hidden', true);
               },
               error:function(XMLHttpRequest, textStatus, errorThrown)
               {
                 self.handleError(XMLHttpRequest, textStatus, errorThrown);
               }
             });
    }
  },
  addButtonClickEvent:function(e)
  {
    var self=this;
    var objectName="";
    if(this.module=="Contacts")
    {
      objectName=this.model.attributes.first_name+" "+this.model.attributes.last_name;
    }
    else
    {
      objectName=this.model.attributes.name;
    }
    app.drawer.open({
                      layout:"document-insert",
                      context:{
                        title:"Add document to: "+objectName,
                        guid:this.model.id,
                        docTypeList:$('#ddDocTypes'),
                        docType:this.getDocTypeId()
                    }
                    }, function(callback)
                    {
                      if(callback=="success")
                      {
                        self.docTypesChangeEvent();
                      }
                    })
  }, //Open a drawer to show the search screen
  searchButtonClickEvent:function(e)
  {
    /*
    This search is not actually used, it is here just to be compliant with sugar's dashlet
     */
    app.drawer.open
    ({
        layout:"document-search",
        context:{
          model:this.model
      }
    })
  },
  populateDashletHeader:function(data, self)
  {
    //app.logger.debug(data);
    var html_head=$('#dtDocuments thead').html();
    if(data!=null&&data!=='undefined'&&data.Tags.length>=1)
    {
      var tags=data.Tags;
      var sorted=false;
      var i, j;
      var tmp_tag;
      while(!sorted)
      {
        sorted=true;
        for(i=0; i<tags.length-1; i++)
        {
          if(tags[i].Tag.Id>tags[i+1].Tag.Id)
          {
            tmp_tag=tags[i];
            tags[i]=tags[i+1];
            tags[i+1]=tmp_tag;
            sorted=false;
            break;
          }
        }
      }
      var thead='';
      thead=thead+'<tr>';
      thead=thead+'<th id="DocTitle" data-sortdir="0" class="sorting orderByDocTitle"><span data-fieldname="DocTitle">Document Title</span></th>';
      thead=thead+'<th id="DocDatePutin" data-sortdir="-1" class="sorting sorting_desc orderByDocDatePutin"><span data-fieldname="DocDatePutin">Date Added</span></th>';
      for(i=0; i<tags.length; i++)
      {
        thead=thead+'<th data-sortdir="0" id="TagHead'+tags[i].Tag.Id+'"><span>'+tags[i].Tag.Name+'</span></th>';
      }
      thead=thead+'</tr>';
      $('#dtDocuments thead').html(thead);
    }
  }, //Populate the Dashlet with data from the API
  populateDashletData:function(data, self)
  {
    var html=$('#dtDocuments tbody').html();
    var tbody='';
    if(data)
    {
      if(data.length>0)
      {
        for(var i=0; i<data.length; i++)
        {
          var properties=data[i].DocumentProperties;
          tbody=tbody+'<tr>';
          tbody=tbody+'<td class="single"><span><a class="document-link" href="'+app.api.buildURL('Document/Download/'+data[i].Id)+'?platform=base">'+properties.Title+'</a></span></td>';
          tbody=tbody+'<td class="single"><span>'+self.convertDate(properties.AddedOn)+'</span></td>';
          if(data[i].IndexingInfo.TagValues.length>=1)
          {
            var custom_columns=data[i].IndexingInfo.TagValues;
            var tmp_custom_column, j, sorted;
            sorted=false;
            while(!sorted)
            {
              sorted=true;
              for(j=0; j<custom_columns.length-1; j++)
              {
                if(custom_columns[j].TagId>custom_columns[j+1].TagId)
                {
                  tmp_custom_column=custom_columns[j];
                  custom_columns[j]=custom_columns[j+1];
                  custom_columns[j+1]=tmp_custom_column;
                  sorted=false;
                  break;
                }
              }
            }
            for(j=0; j<custom_columns.length; j++)
            {
              tbody=tbody+'<td class="single"><span>'+custom_columns[j].TagValue+'</span></td>';
            }
          }
          tbody=tbody+'</tr>';
        }
      }
      else
      {
        tbody='<td class="single" colspan="3" align="center" style="width:100%;"><span>No documents found!</span></tr>';
      }
    }
    else
    {
      tbody='<td class="single" colspan="3" align="center" style="width:100%;"><span>No documents found!</span></tr>';
    }
    $('#dtDocuments tbody').html(tbody);
  }, //Convert a date to the user's specified preference
  convertDate:function(dateString)
  {
    return app.date(dateString).formatUser();
  }, //Retrieve document types from the API
  getDocumentTypes:function()
  {
    var self=this;
    $('#loading').removeAttr('hidden');
    $.ajax({
             url:app.api.buildURL("Document/Types"),
             beforeSend:function(request)
              {
                request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
              },
             type:'GET', //Upon receiving the document types, set it to the first document type, and display documents
             success:function(data)
             {
               self.buildDocumentTypeDropDown(data);
             },
             error:function(XMLHttpRequest, textStatus, errorThrown)
             {
                self.handleError(XMLHttpRequest, textStatus, errorThrown);
             }
           });
  }, //Populate the list of document types, default to id 1
  buildDocumentTypeDropDown:function(data)
  {
    if(data==null)
    {
      return;
    }
    var select=$('#ddDocTypes');
    var activeDocTypes=[];
    $.each(data, function(i, docType)
    {
      if(docType.Active)
      {
        select.append($('<option/>').attr("value", docType.Id).text(docType.Name));
        activeDocTypes.push(docType.Id);
      }
    });
    select.select2();
    if(activeDocTypes.length==0)
    {
      app.alert.show('Error', {
        level:'error',
        messages:"The Document Tag 'CRM ID' was not found on any active Document Types.<br><br> Please add the CRM ID Tag to an active Document Type.",
        autoClose:false
      });
      return;
    }
    select.val(activeDocTypes[0]);
    select.find("[value=#]").remove();
    select.trigger("change");
    $('#loading').attr('hidden', true);
  }, //The document type has been changed, get the count, and first page of documents for the current type
  docTypesChangeEvent:function(e)
  {
    app.alert.dismiss("Error");
    var self=this;
    var docType=this.getDocTypeId();
    var docType_name=this.getDocTypeName();
    self.allowedDocumentTypeTags=[];
    self.allowedDocumentTypeTagsID=[];
    //Fix for CRMDEV-924. Check that a doc type has been defined before calling the API.
    if(docType)
    {
      self.getDocumentTypeCount(this.model.id, docType);
      //watch out for the ajax calls order. It is ajax(ajax(ajax)))
      //To be investigated if we need some sort of fallback if first ajax fails
      $.ajax({
               url:app.api.buildURL("Document/GetAllowedTags/doctype/"+btoa(docType_name)),
               beforeSend:function(request)
               {
                 request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
               },
               type:'GET',
               success:function(resp)
               {
                 self.allowedDocumentTypeTags=resp;
                 $.ajax({
                          url:app.api.buildURL("Document/Types/"+docType),
                          beforeSend:function(request)
                          {
                            request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
                          },
                          type:'GET',
                          success:function(resp2)
                          {
                            //app.logger.debug("Populate header with");
                            //app.logger.debug(resp2);
                            /*
                            CRMDEV-1328 remove tags that are not wanted
                             */
                            if (self.allowedDocumentTypeTags!=null&&self.allowedDocumentTypeTags.length!=0)
                            {
                              //app.logger.debug("Allowed tags are: "+self.allowedDocumentTypeTags);
                              var i;
                              var clone_obj=[];
                              for(i=0; i<resp2.Tags.length; i++)
                              {
                                if(self.allowedDocumentTypeTags.indexOf(resp2.Tags[i].Tag.Name)!=-1)
                                {
                                  app.logger.debug("ADD ==> Allowed tag found: "+resp2.Tags[i].Tag.Name);
                                  self.allowedDocumentTypeTagsID.push(resp2.Tags[i].Tag.Id);
                                  clone_obj.push(resp2.Tags[i]);
                                }
                                else
                                {
                                  app.logger.debug("Unallowed tag found: "+resp2.Tags[i].Tag.Name);
                                }
                              }
                              resp2.Tags=clone_obj;
                            }
                            else
                            {
                              //app.logger.debug("Allowed tags feature not used <-- Header");
                            }
                            self.populateDashletHeader(resp2, self);
                            self.getDocuments(self.model.id, docType, 0, 'DocDatePutin', 1, self, function(self)
                            {
                              self.newSortColumnSelected($("#DocDatePutin"), "desc");
                            });
                          }
                        })
               }
             })
    }
  },
  getDocumentTypeCount:function(id, type)
  {
    var self=this;
    $.ajax({
             url:app.api.buildURL('Document/TypeCount/'+id+"/"+type),
             beforeSend:function(request)
             {
              request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
              },
             type:'GET', //If there is an error from the API, just set the count to 0
             success:function(data)
             {
               try
               {
                 self.initialisePages(data[0].Count);
               }
               catch(error)
               {
                 self.initialisePages(0);
               }
             },
             complete:function()
              {
                $('#loading').attr('hidden', true);
              },
             error:function(XMLHttpRequest, textStatus, errorThrown)
              {
                self.handleError(XMLHttpRequest, textStatus, errorThrown);
              }
           })
  }, //Call the document API, return the results to the screen, and show the total
  getDocuments:function(id, docType, offset, sortField, direction, callbackData, callback)
  {
    var self=this;
    $('#loading').removeAttr('hidden');
    var url_link='Document/CRMID/'+id+"/"+docType+"/"+offset+"/"+sortField+"/"+direction;
    app.logger.debug(url_link);
    $.ajax({
             url:app.api.buildURL(url_link),
             beforeSend:function(request)
             {
               request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
             },
             type:'GET',
             success:function(resp_getDocuments)
             {
                var clone_resp=self.removeUnAllowedTagsFromContentResponse(resp_getDocuments,self);
                self.populateDashletData(clone_resp, self);
                if(callback)
                {
                  callback(callbackData);
                }
                $('#loading').attr('hidden', true);
                },
             error:function(XMLHttpRequest, textStatus, errorThrown)
             {
              self.handleError(XMLHttpRequest, textStatus, errorThrown);
             }
           });
  },
  removeUnAllowedTagsFromContentResponse:function(clone_resp,self)
  {
    //app.logger.debug("----------- Populate content with --------------------");
    //app.logger.debug(resp_getDocuments);
    /*
    VERY WEIRD JAVASCRIPT BEHAVIOUR !!!!!!
    The above app.logger.debug command DIFFERS based n the line BELOW, 399. Somehow that variable is a reference or something
    And it somehow has a backwards effect. Never seen such a thing
    Originally attempted using splice(i) instead of push and it wasn't working AND it affected the above app.logger.debug output
     */
    /*
    Remove tags
     */
    //app.logger.debug(self.allowedDocumentTypeTagsID);
    if (self.allowedDocumentTypeTagsID!=null&&self.allowedDocumentTypeTagsID.length!=0)
    {
      var i=0;
      var j=0;
      var clone_obj=null;
      for (j=0;j<clone_resp.length;j++)
      {
        //clone_obj=clone_resp[j].IndexingInfo.TagValues;
        clone_obj=[];
        for(i=0; i<clone_resp[j].IndexingInfo.TagValues.length; i++)
        {
          if(self.allowedDocumentTypeTagsID.indexOf(clone_resp[j].IndexingInfo.TagValues[i].TagId)!=-1)
          {
            clone_obj.push(clone_resp[j].IndexingInfo.TagValues[i]);
            //DO NOT USE splice, ALWAYS use clone
          }
        }
        clone_resp[j].IndexingInfo.TagValues=clone_obj;
      }
    }
    else
    {
      app.logger.debug("Allowed tags feature is not used");
    }
    return clone_resp;
  },
  //Handle a column heading's click
  sortDataEvent:function(event)
  {
    var column=this.$(event.currentTarget);
    this.toggleColumnOrder(column);
  }, //Given a column, provide feedback via CSS, and update the data
  toggleColumnOrder:function(column)
  {
    var self=this;
    var data_sort_direction=column.attr("data-sortdir");
    //If it is a different column, return ascending order data, and trigger CSS when finished
    if(data_sort_direction==="0")
    {
      app.logger.debug("Different column, use default ASC");
      self.getDocuments(self.model.id, self.getDocTypeId(), 0, column.attr("id"), "0", column, function(column)
      {
        self.newSortColumnSelected(column, "asc");
      });
    }
    //Otherwise it's the same column, toggle the class, and fetch data
    else
    {
      if(data_sort_direction==="-1")
      {
        self.getDocuments(self.model.id, self.getDocTypeId(), 0, column.attr("id"), "0", column, function(column)
        {
          self.fromDescToAsc(column);
        });
      }
      else
      {
        if(data_sort_direction==="1")
        {
          self.getDocuments(self.model.id, self.getDocTypeId(), 0, column.attr("id"), "1", column, function(column)
          {
            self.fromAscToDesc(column);
          });
        }
        else
        {
          app.logger.debug("Error, should never reach line 306");
        }
      }
    }
    self.initialisePages();
  }, //A new column has been selected, we need to set the CSS accordingly
  newSortColumnSelected:function(column, expectedDirection="desc")
  {
    if(expectedDirection=="desc")
    {
      column.attr('data-sortdir', '-1');
      column.removeClass("sorting_asc");
      column.addClass("sorting_desc");
    }
    else
    {
      column.attr('data-sortdir', '1');
      column.removeClass("sorting_desc");
      column.addClass("sorting_asc");
    }
    $.each(column.siblings("th"), function(index, el)
    {
      var sibling=$(el);
      sibling.attr('data-sortdir', '0');
      $(el).removeClass("sorting_desc");
      $(el).removeClass("sorting_asc");
      //app.logger.debug($(el).attr('data-sortdir'));
    });
  }, //Toggle the sorting CSS to descending
  fromAscToDesc:function(column)
  {
    column.attr("data-sortdir", '-1');
    column.removeClass("sorting_asc");
    column.addClass("sorting_desc");
    app.logger.debug(
      'SORTING ASC -> DESC , column: '+column.attr('id')+': '+column.attr('data-sortdir')+' has class: '+column.attr(
      'class'));
  }, //Toggle the sorting CSS to ascending
  fromDescToAsc:function(column)
  {
    column.attr("data-sortdir", '1');
    column.removeClass("sorting_desc");
    column.addClass("sorting_asc");
    app.logger.debug(
      'SORTING DESC -> ASC , column: '+column.attr('id')+': '+column.attr('data-sortdir')+' has class: '+column.attr(
      'class'));
  }, //Helper function to return the currently selected column and ordering
  getCurrentColumnSettings:function()
  {
    var columns=$("#dtDocuments").find("th");
    var returnObject={};
    app.logger.debug("------- Columns settings ----------");
    $.each(columns, function(index, value)
    {
      var element=$(value);
      if(!element.attr("data-sortdir")=="0")
      {
        returnObject.field=element.attr("id");
        var classString=element.attr("data-sortdir");
        if(classString=="1")
        {
          returnObject.direction="1";
        }
        else
        {
          returnObject.direction="0";
        }
        return false;
      }
    });
    return returnObject;
  }, //Returns the ID of the document type
  getDocTypeId:function()
  {
    return $('#ddDocTypes').find(":selected").val();
  },
  getDocTypeName:function()
  {
    return $('#ddDocTypes').find(":selected").html();
  },
  initialisePages:function(count)
  {
    //If null is passed, we don't want to re-set the total records or pages
    if(count!=null)
    {
      if(count==1)
      {
        $('#record-count').html('1 Record');
      }
      else
      {
        $('#record-count').html(count+' Records');
      }
      var totalPages=Math.ceil((count/5));
      if(totalPages==0)
      {
        totalPages=1;
      }
      this.setTotalPages(totalPages);
    }
    var currentPage=1;
    this.setCurrentPage(currentPage);
    this.togglePageButtons(currentPage, this.getTotalPages());
  },
  getCurrentPage:function()
  {
    return parseInt($("#current-page-no").text());
  },
  setCurrentPage:function(number)
  {
    $("#current-page-no").html(number);
  },
  getTotalPages:function()
  {
    return parseInt($("#total-page-qty").text());
  },
  setTotalPages:function(number)
  {
    $("#total-page-qty").html(number);
  }, //Enable / Disable the page scrolls based on the number pf pages
  togglePageButtons:function(currentPage, totalPages)
  {
    if(totalPages==1)
    {
      this.togglePrevButton("disable");
      this.toggleNextButton("disable");
    }
    else
    {
      if((totalPages>1)&&(currentPage==1))
      {
        this.togglePrevButton("disable");
        this.toggleNextButton("enable");
      }
      else
      {
        if((totalPages>1)&&(currentPage==totalPages))
        {
          this.togglePrevButton("enable");
          this.toggleNextButton("disable");
        }
        else
        {
          this.togglePrevButton("enable");
          this.toggleNextButton("enable");
        }
      }
    }
  }, //Enable or disable the next button based on the setting argument
  togglePrevButton:function(setting)
  {
    if(setting=="disable")
    {
      $('#prev').addClass('disabled');
      $('#prev').attr('disabled', true);
    }
    else
    {
      $('#prev').removeClass('disabled');
      $('#prev').removeAttr('disabled');
    }
  }, //Enable or disable the next button based on the setting argument
  toggleNextButton:function(setting)
  {
    if(setting=="disable")
    {
      $('#next').addClass('disabled');
      $('#next').attr('disabled', true);
    }
    else
    {
      $('#next').removeClass('disabled');
      $('#next').removeAttr('disabled');
    }
  }, //Display the next page of documents
  paginateRecord:function(event)
  {
    var el=$(event.currentTarget), data=el.data();
    var attr=el.attr('disabled');
    if(attr=='disabled')
    {
      return;
    }
    else
    {
      var currentPage=this.getCurrentPage();
      var totalPages=this.getTotalPages();
      if(data.actionType=='next')
      {
        currentPage++;
      }
      else
      {
        if(data.actionType=='prev')
        {
          currentPage--;
        }
      }
      this.setCurrentPage(currentPage);
      this.togglePageButtons(currentPage, totalPages);
      var sortInfo=this.getCurrentColumnSettings();
      var skip=(currentPage-1)*5;
      app.logger.debug(" ====== NEXT PAGE =============");
      if (sortInfo==null||sortInfo=={})
      {
        app.logger.debug("Column settings missing !!!");
        return false;
      }
      //app.logger.debug(sortInfo);
      this.getDocuments(this.model.id, this.getDocTypeId(), skip, sortInfo.field, sortInfo.direction);
    }
  },
  handleError:function(response, status, error)
  {
    var details=$.parseJSON(response.responseText);
    if(details!=null)
    {
      if(details.Message!=null)
      {
        error+": "+details.Message;
      }
      else
      {
        if(details.error_message!=null)
        {
          error=details.error_message;
        }
      }
    }
    app.alert.show('Error', {
      level:'error', messages:error, autoClose:false
    });
    this.populateDashletData(null, this);
    this.initialisePages(0);
  }
})