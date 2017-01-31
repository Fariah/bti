$(document).ready(function() {
    var newsObj = {
        bind: function () {
            this.initDataTable();
            this.initDataTableSupport();
        },
        initDataTable: function () {

        }
    };
    $('#example').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    } );
} );