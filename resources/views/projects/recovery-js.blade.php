<script>
    var radiationItems = [];

    for (let month = 1; month <= 12; month++) {
        let month_name = '';
        switch (month) {
            case 1:
                month_name = 'Enero';
                break;
        
            case 2:
                month_name = 'Febrero';
                break;

            case 3:
                month_name = 'Marzo';
                break;

            case 4:
                month_name = 'Abril';
                break;

            case 5:
                month_name = 'Mayo';
                break;

            case 6:
                month_name = 'Junio';
                break;

            case 7:
                month_name = 'Julio';
                break;
        
            case 8:
                month_name = 'Agosto';
                break;

            case 9:
                month_name = 'Septiembre';
                break;

            case 10:
                month_name = 'Octubre';
                break;

            case 11:
                month_name = 'Noviembre';
                break;

            case 12:
                month_name = 'Diciembre';
                break;
        }
        const element = {
            'month': month,
            'month_name': month_name,
            'radiation': 0,
            'consumption': 0,
            'generation': 0,
            'solar_fraction': 0,
            'energy_sold': 0,
            'energy_buyed': 0
        };
        radiationItems.push(element);
    }
    
    radiationTable = $('#radiationTable').DataTable({
        'ordering': false,
        'searching': false,
        'paging': false,
        'info': false,
        'columns': [
            {data:"month_name"},
            {data:"radiation"},
            {data:"consumption"},
            {data:"generation"},
            {data:"solar_fraction"},
            {data:"energy_sold"},
            {data:"energy_buyed"}
        ],
        'ajax': function (data, callback, settings) {
                callback({ data: radiationItems })
        },
        columnDefs: [
            {
                targets: '_all',
                className: 'dt-right'
            }
        ]
    });

    var dataConsumptions = [];
    var dataGenerations = [];
    var ctx = document.getElementById('compareChart').getContext('2d');
    var dataChart = [{
                    label: 'Consumo kWh',
                    backgroundColor: [
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)',
                        'rgba(237,125,49,25)'
                    ],
                    //data: [ 43128,49104,48960,28152,21168,23328,22464,20808,18504,19584,20592,33408 ]
                    data: dataConsumptions
                }, {
                    label: 'Generación kwh',
                    backgroundColor: [
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)'
                    ],
                    //data: [ 12877,12214,11285,9587,7638,6374,6849,8228,9549,11635,12587,12874 ]
                    data: dataGenerations
            }];

    compareChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            datasets: dataChart,
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    function calculateRadiation(month) {
        var element = radiationItems[month - 1];
        element.consumption = consumptions[month - 1].getNumber();
        dataConsumptions[month - 1] = consumptions[month - 1].getNumber();
        radiationTable.ajax.reload();
        radiationTable.columns.adjust().draw();
        compareChart.update();
    }
</script>