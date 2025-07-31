({
  plugins:['Dashlet', 'SugarLogic', 'ErrorDecoration', 'GridBuilder', 'Editable', 'ToggleMoreLess', 'Tooltip'],
  render:function()
  {
    this.$el.html(this.template(this.model.toJSON()));
    return this;
  }
})