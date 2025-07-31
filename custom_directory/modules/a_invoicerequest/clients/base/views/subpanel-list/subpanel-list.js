({  
  //subpanel-list.js  
  extendsFrom:'SubpanelListView',  
  initialize:function(options){  
  this._super('initialize',[options]);  
  this.on('render',this._disableActions,this);  
  },  
  _disableActions:function() {  
  var industryValue=this.context.parent.get('model').get("industry");  
  var parentModule=this.context.parent.get('module');
  _.each(this.meta.rowactions.actions, function(action){  
  if(!_.isEqual(action['icon'],"fa-eye")){ // for preview button  
  delete action['event'];  
  action['css_class'] = 'disabled btn';  
  }  
  });
  }    
})  