<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/api/processing().js"></script>
<script src="//cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
<script>
    $.extend( 
        $.fn.dataTable.defaults, {
            "language": {
                processing:     "{{__('Processing')}}...",                
                search:         "{{__('Search')}}&nbsp;:",
                lengthMenu:     "{{__('Show _MENU_ rows')}}",
                info:           "{{__('_START_ to _END_ of _TOTAL_')}}",
                infoEmpty:      "{{__('No data avaiable')}}",
                infoFiltered:   "{{__('(filtered of _MAX_)')}}",
                infoPostFix:    "",
                loadingRecords: "{{__('Loading')}}...",
                zeroRecords:    "{{__('No data avaiable')}}",
                emptyTable:     "{{__('No data avaiable')}}",
                paginate: {
                    first:      "{{__('First')}}",
                    previous:   "{{__('Previous')}}",
                    next:       "{{__('Next')}}",
                    last:       "{{__('Last')}}"
                },
                aria: {
                    sortAscending:  ": {{__('Ascending order')}}",
                    sortDescending: ": {{__('Descending order')}}"
                }
            },
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "{{ __('All') }}"] ],
            "columnDefs": [
            {
                "targets": 'no-order',
                "orderable": false,
            },
            {
                "targets": 'no-search',
                "searchable": false,
            },
            { 
                "targets": 'fit',
                "className": 'dt-body-right' 
            }
            ]
        }
    );
</script>