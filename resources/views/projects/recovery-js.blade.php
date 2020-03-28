<script>
    potency = new AutoNumeric("#potency", integer);
    investment = new AutoNumeric("#investment", integer);
    fiscal_bonus = new AutoNumeric("#fiscal_bonus", decimal);
    inflation_1 = new AutoNumeric("#inflation_1", decimal);
    inflation_8 = new AutoNumeric("#inflation_8", decimal);
    inflation_rest = new AutoNumeric("#inflation_rest", decimal);
    discount_rate = new AutoNumeric("#discount_rate", decimal);
    van = new AutoNumeric("#van", integer);
    tir = new AutoNumeric("#tir", decimal);
    recovery_years = new AutoNumeric("#recovery_years", integer);

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

    var dataCashflow = [];
    var ctxflow = document.getElementById('cashflowChart').getContext('2d');
    var dataChartFlow = [{
                    label: 'Flujo de caja',
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
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)',
                        'rgba(0,112,192,25)'
                    ],
                    //data: [ 12877,12214,11285,9587,7638,6374,6849,8228,9549,11635,12587,12874 ]
                    data: dataCashflow
            }];

    cashflowChart = new Chart(ctxflow, {
        type: 'bar',
        data: {
            labels: ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
            datasets: dataChartFlow,
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
        element.generation = roundTo(element.radiation * potency.getNumber() * 31 * 0.85 / 1000, 0);
        generations[month - 1].set(element.generation);
        dataGenerations[month - 1] = generations[month - 1].getNumber();
        element.solar_fraction = roundTo((element.consumption > 0 ? element.generation / element.consumption * 100 : 0), 2);
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
        cashflowItems[7][1] = -(roundTo(fiscal_bonus.getNumber() * exchange_rate.getNumber(), 0));
        cashflowTable.ajax.reload();
        cashflowTable.columns.adjust().draw();
    }

    function investmentUpdated() {        
        cashflowItems[7][0] = roundTo(investment.getNumber() * exchange_rate.getNumber(), 0);
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
            
            cashflowItems[0][index] = roundTo(kc, 2);
            cashflowItems[2][index] = roundTo(cashflowItems[0][index] * cashflowItems[1][index], 2);
            cashflowItems[3][index] = roundTo(kc * 0.6, 2);
        }
        cashflowTable.ajax.reload();
        cashflowTable.columns.adjust().draw();
        calculateCashflow();
    }

    function discountRateUpdated() {
        van.set(calculateVan(discount_rate.getNumber() / 100));
    }

    function calculateVan(rate) {   //rate as decimal, not percentage
        var added = 0;
        for (let index = 1; index <= 25; index++) {
            added += cashflowItems[9][index] / Math.pow((1 + rate), index);
        }
        return cashflowItems[9][0] + added;
    }

    function calculateTir(){
        var min_rate = 0;
        var max_rate = 0.3;

        var van_min = calculateVan(min_rate);
        var van_max = calculateVan(max_rate);

        if (van_min >= 0 && van_max < 0) {
            var error = van_min - van_max;
            var avg_van = 0;
            var avg_rate = 0;
            while (error >= 1e-10) {
                avg_rate = (min_rate + max_rate) / 2;
                avg_van = calculateVan(avg_rate);
                if (avg_van <= 0) {
                    max_rate = avg_rate;
                } else if (avg_van > 0){
                    min_rate = avg_rate;
                }
                van_min = calculateVan(min_rate);
                van_max = calculateVan(max_rate);
                error = van_min - van_max;
            }
            tir.set(avg_rate * 100);
        } else {
            tir.set(0);
        }
    }
</script>