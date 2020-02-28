<script>
    proposalsItems = [];
    proposalsTable = $('#proposalsTable').DataTable({
        'ordering': false,
        'searching': false,
        'paging': false,
        'info': false,
        'columns': [
            {data:"name"},
            {data:"usd_w"},
            {data:"inverter_1_q"},
            {data:"inverter_1_name"},
            {data:"inverter_2_q"},
            {data:"inverter_2_name"},
            {data:"inverter_3_q"},
            {data:"inverter_3_name"},
            {data:"panels_q"},
            {data:"usd_iva"},
            {data:"kw"},
            {data:"benefit"},
            {data:"porc_price"},
            {data:"m2"},
            {data:"generation"},
            {data:"solar_fraction"},
            {data:"co2"},
            {data:"trees"},
            {data:"specific_gener"},
            {data:"actions"}
        ],
        'ajax': function (data, callback, settings) {
                callback({ data: proposalsItems })
        },
        columnDefs: [
            {
                targets: '_all',
                className: 'dt-right'
            }
        ]
    });
</script>