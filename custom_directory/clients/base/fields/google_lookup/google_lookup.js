({
  _render:function()
  {
    this._super('_render');
    var el=$('input[name="'+this.def.name+'"]');
    var module_from_select=el.attr('data-source-origin');
    //app.logger.debug("Module from select ==> "+module_from_select);
    var url_link=app.api.buildURL("googlelookup/autocomplete/");
    //app.logger.debug(url_link);
    el.select2(
      {
        width:'100%',
        minimumInputLength:2,
        minimumResultsForSearch:Infinity,
        allowClear:true,
        debug:true,
        ajax: {
          quietMillis:500,
          url: function (params) {
            var real_link=url_link+params;
            //app.logger.debug(real_link);
            return real_link;
          },
          transport:function(params)
          {
            params.beforeSend=function(request)
            {
              request.setRequestHeader("OAuth-Token", SUGAR.App.api.getOAuthToken());
            };
            return $.ajax(params);
          },
          results:function(data, page)
          {
            //app.logger.debug(data);
            return {results:data};
          },
          processResults:function(data, params)
          {
            if(!params.page)
            {
              params.page=1;
            }
            //params.page = params.page || 1;
            return {
              results:data, pagination:{
                more:(params.page*30)<data.total_count
              }
            };
          }
        }
      }
    );
    el.on('select2-selecting',function(e)
    {
      //app.logger.debug(e.val);
	    var url_link=app.api.buildURL("googlelookup/geocode/");
      var place_id=e.val; //NOT FUNCTION, member
      $.ajax({
        url:url_link+place_id,
        beforeSend:function (e)
        {
          e.setRequestHeader("OAuth-Token",SUGAR.App.api.getOAuthToken())
        },
        success:function (resp)
        {
          var result=resp.results[0];
          //app.logger.debug(result);
	        var module_from_select=el.attr('data-source-origin');
	        var fieldName=el.attr("aria-label");
	        var addressType=fieldName.split("_")[0];
	        var theModel=null;
	        //If we're in a drawer, get its model
	        var drawer=app.drawer.getActive();
	        if(drawer)
	        {
		        /*if (drawer.context.children.length>=1)
		        {
			        for (var i=0;i<drawer.context.children.length;i++)
			        {
				        if (drawer.context.children[i].attributes.module==module_from_select)
				        {
					        theModel=drawer.context.children[i];
					        app.logger.debug("Child module found for "+module_from_select);
					        app.logger.debug(theModel);
				        }
			        }
		        }
		        if (!theModel)
		        {
			        app.logger.debug("Using parent module's model");
			        theModel=drawer.context.get("model");
			        app.logger.debug(theModel);
		        }*/
            theModel=drawer.context.get("model");
	        }
	        //Otherwise, get the current context model
	        else
	        {
		        theModel=app.controller.context.get('model');
	        }
          //theModel=app.controller.context.get('model');
	        var address_components=result.address_components;
	        var type;
	        for (i=0;i<address_components.length;i++)
          {
            type=address_components[i].types[0];
            //app.logger.debug("Type is: "+type);
            switch (type)
            {
              case 'postal_code':
                //app.logger.debug("Set postal_code field "+addressType+"_address_postalcode"+" to : "+address_components[i].long_name);
	              theModel.set(addressType+"_address_postalcode", address_components[i].long_name);
                break;
	            case 'postal_town':
		            theModel.set(addressType+"_address_city", address_components[i].long_name);
		            break;
	            case 'country':
		            theModel.set(addressType+"_address_country", address_components[i].long_name);
		            break;
              case 'route':
		            theModel.set(addressType+"_address_street", address_components[i].long_name); //routes are multiple, for the moment the last one is retained
		            break;
	            case 'administrative_area_level_2':
		            theModel.set(addressType+"_address_state", address_components[i].long_name);
		            break;
            }
          }
        }
      });
    });
    el.on('select2-opening',function(e)
    {
      //app.logger.debug("Open select2, clear existing value => "+el.val());
      el.val("").trigger('change');
      //app.logger.debug("After clear: "+el.val());
    });
  }
})