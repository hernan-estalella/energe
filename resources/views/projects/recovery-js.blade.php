<script>
    potency = new AutoNumeric("#potency", integer);
    investment = new AutoNumeric("#investment", integer);
    fiscal_bonus = new AutoNumeric("#fiscal_bonus", integer);
    inflation_1 = new AutoNumeric("#inflation_1", decimal);
    inflation_8 = new AutoNumeric("#inflation_8", decimal);
    inflation_rest = new AutoNumeric("#inflation_rest", decimal);

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
        calculateCashflow();
    }

    function calculateGeneration(month) {
        var element = radiationItems[month - 1];
        element.generation = element.radiation * potency.getNumber() * 31 * 0.85 / 1000;
        generations[month - 1].set(element.generation);
        dataGenerations[month - 1] = generations[month - 1].getNumber();
        element.solar_fraction = (element.consumption > 0 ? element.generation / element.consumption * 100 : 0);
        element.energy_sold = (element.generation > element.consumption ? element.generation - element.consumption : 0);
        element.energy_buyed = (element.generation > element.consumption ? 0 : element.consumption - element.generation);
        radiationTable.ajax.reload();
        radiationTable.columns.adjust().draw();
        compareChart.update();
        calculateCashflow();
    }

    function potencyUpdated() {
        for (let month = 1; month <= 12; month++) {
            calculateGeneration(month);
        }
    }

    function fiscalBonusUpdated() {
        cashflowItems[7][1] = fiscal_bonus.getNumber() * exchange_rate.getNumber();
        cashflowTable.ajax.reload();
        cashflowTable.columns.adjust().draw();
    }

    function investmentUpdated() {        
        cashflowItems[7][0] = investment.getNumber() * exchange_rate.getNumber();
        cashflowTable.ajax.reload();
        cashflowTable.columns.adjust().draw();
    }

    function someInflationUpdated() {
        var kc = kwh_cost.getNumber();
        for (let index = 1; index <= 25; index++) {
            if (index == 2) {
                kc += kc * inflation_1.getNumber() / 100;
            } else if (index > 2 && index <= 8) {
                kc += kc * inflation_8.getNumber() / 100;
            } else if (index > 8) {
                kc += kc * inflation_rest.getNumber() / 100;
            }
            
            cashflowItems[0][index] = kc;
            cashflowItems[2][index] = cashflowItems[0][index] * cashflowItems[1][index];
            cashflowItems[3][index] = kc * 0.6;
        }
        cashflowTable.ajax.reload();
        cashflowTable.columns.adjust().draw();
    }
</script>