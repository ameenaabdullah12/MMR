/*({
  //**MMRPO-A** panel-top.js
  extendsFrom: 'PanelTopView',
  initialize:function(options) {
  this._super('initialize', [options]);
  var poh_status=this.context.parent.get('model').get("poh_status_c");
  var parentModule=this.context.parent.get('module');
  if(!_.isEqual(poh_status,'2') && _.isEqual(parentModule,"b_po_header")){
  _.each(_.first(this.meta.buttons).buttons, function(action){
  action['css_class'] = 'disabled btn';
  });
  }
  },
})
*/

({
  //**MMRPO-B** panel-top.js
  extendsFrom:'PanelTopView',
  initialize:function(options){
  this._super('initialize', [options]);
  var parentModule=this.context.parent.get('model').module;
  var parentCollection = this.context.parent.get('collection');
  var parentModel=this.context.parent.get('model');
  parentCollection.on('data:sync:complete', function() {
  if(_.isEqual(parentModel.get('poh_status_c'),'2') && _.isEqual(parentModule,'b_po_header')){
  this.$('a[name=create_button]').addClass('disabled btn');  
   this.$('a[data-original-title=Actions]').addClass('disabled btn');
  }  
  },this);
  }
})