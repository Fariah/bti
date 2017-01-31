$(document).ready(function() {
    var newsTable;
    var newsObj = {
        bind: function () {
            this.initDataTable();
            this.initDatatbleActions();
        },
        initDataTable: function () {
            newsTable = $('#NewsGrid').DataTable( {
                //"language": {
                //    "decimal": ",",
                //    "thousands": "."
                //},
                "oLanguage": {
                    "sInfoEmpty": '',
                    "sEmptyTable": "No news available"
                },
                "scrollX": true,
                "columnDefs": [
                    {
                        "targets": -1,
                        "width": "6%",
                        "searchable": false,
                        "orderable": false,
                        "data": null,
                        "defaultContent": "<button class='Edit btn btn-xs btn-info'>Edit</button>&nbsp;<button class='Delete btn btn-xs btn-danger'>Delete</button>"
                    },
                    { "width": "18%", "targets": 0 },
                    { "width": "6%", "targets": 5 },
                    { "width": "6%", "targets": 4 },
                    {
                        "width": "14%",
                        "render": function ( data, type, row ) {
                            return '<img width="200" src="/img/news/'+data+'"></img>';
                        },
                        "targets": 2
                    },
                    {
                        "width": "2%",
                        "render": function ( data, type, row ) {
                            if(data == 1) {
                                return '<span class="label label-success">Active</span>';
                            } else {
                                return '<span class="label label-warning">Disabled</span>';
                            }
                        },
                        "targets": 1
                    }
                ],
                ajax: {
                    type: "POST",
                    url: '/admin/getNewsGrid',
                    dataSrc: 'data'
                },
                columns: [
                    { data: 'title' },
                    { data: 'status' },
                    { data: 'image' },
                    { data: 'description' },
                    { data: 'updated_at' }
                ],
                rowId: 'id'
            } );
        },
        initDatatbleActions: function () {
            var self = this;
            $('#NewsGrid tbody').on('click', '.Edit', function() {
                var data = newsTable.row( $(this).parents('tr') ).data();
                window.location.href = "/admin/news/edit/" + data.id;
            });
            $('#NewsGrid tbody').on('click', '.Delete', function() {
                if (confirm("Вы уверены?")) {
                    var data = newsTable.row( $(this).parents('tr') ).data();
                    window.location.href = "/admin/news/delete/" + data.id;
                }
            });
        }
    };
    newsObj.bind();
} );