({
    extendsFrom: 'PipelineRecordlistContentView',

    /**
     * MMR CUSTOM TILE VIEW | To better format the Title Total when dealing in millions!
	 * Override the displayColumnTotal function to format numbers with thousand separators.
     */
     displayColumnTotal: function(self, column) {
        const params = {
            filter: self.getFilters(column),
            sumField: self.pipelineConfig.total_field[self.module],
        };
        const url = app.api.buildURL(self.module, 'total', {}, params);
        const userPreferredCurrencyId = app.user.getPreference('currency_id');
        const BaseCurrencyId = app.currency.getBaseCurrencyId();

        app.api.call('read', url, null, {
            success: function(data) {
                if (_.isEmpty(data)) {
                    return;
                }
                if (userPreferredCurrencyId !== BaseCurrencyId &&
                    app.user.getPreference('currency_show_preferred') &&
                    data.field_type === 'currency'
                ) {
                    column.userPreferredCurrencyId = userPreferredCurrencyId;
                }
                column.isCurrency = (data.field_type === 'currency');
				
				let dataSum = data.sum_by_field || 0;
                let decimal = (dataSum) ? 2 : 0;
				
                if (column.isCurrency) {
                    
                    column.headerTotal = app.currency.formatAmountLocale(dataSum, BaseCurrencyId, decimal);

                    if (column.userPreferredCurrencyId) {														 
					   
                        let headerTotalPreferred = app.currency.convertAmount(
                            dataSum, BaseCurrencyId, userPreferredCurrencyId
                        );
                        column.headerTotalPreferred = app.currency.formatAmountLocale(
                            headerTotalPreferred, userPreferredCurrencyId, decimal
                        );
                    }
                } else {
					//MMR FLOOR the Decimal if the value it > 1K
					//and using formatNumber(value, round, precision, numberGroupSeparator, decimalSeparator, toStringOnly)
					
					if (dataSum > 1000) {
						dataSum = Math.floor(dataSum);
						column.headerTotal = app.utils.formatNumber(dataSum, 0,0,',','.')
					}
					else {
						column.headerTotal = app.utils.formatNumber(dataSum, 2,2,',','.')
					}
						
                }

                let tpl = app.template.getView('pipeline-recordlist-content.total');
                self.$el.find('#total-kanban-' + column.headerID).remove();
                self.$el.find('#original-sum-title-' + column.headerID).append(
                    tpl({
                        colorIndex: column.colorIndex,
                        headerTotal: column.headerTotal,
                        isCurrency: column.isCurrency,
                        isSum: column.isSum,
                        headerID: column.headerID,
                        isShowTotal: self.isShowTotal,
                        userPreferredCurrencyId: column.userPreferredCurrencyId,
                        headerTotalPreferred: column.headerTotalPreferred,
                    })
                );

            }
        });
    },
});
