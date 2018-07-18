$(document).ready(function(){
	core.init();
});

var core = {
	userToken: '',
	transactionsURI: '/api/transactions',
	transactionsTable: '#transactionsTable',

	init: function() {
		this.userToken = $(this.transactionsTable).data('token');

		this.getTransactions();
	},
	getUserToken: function() {
		return this.userToken;
	},
	getTransactions: function() {
		var self = this;
		var xhr  = new XMLHttpRequest();

        xhr.open( 'GET', self.transactionsURI, true );
        xhr.setRequestHeader( 
        	'X-AUTH-TOKEN', 
        	self.getUserToken()
        );

        xhr.onreadystatechange = function() {
            if ( xhr.readyState === 4 ) {

                var json = $.parseJSON(xhr.response);

                if ( json.status === 'success' ){
                    self.createTable(json.data);
                }
            }
        }

        xhr.send();
	},
	createTable: function(transactions) {
		var html = '';

		transactions.forEach(function(item){
			html += '<tr>' +
						'<td>' + item.transactionId + '</td>' +
						'<td>' + item.amount + '</td>' +
						'<td>' + item.date + '</td>' +
					'</tr>';
		});

		$(this.transactionsTable).find('tbody').html(html);
	}
}