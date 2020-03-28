<script>
    cashflowItems = [];
    for (let index = 0; index < 11; index++) {
        name = "";
        type = "";
        switch (index) {
            case 0:
                name = "Precio energía comprada";
                break;
            case 1:
                name = "kWh año";
                break;
            case 2:
                name = "Total";
                break;
            case 3:
                name = "Precio energía vendida";
                type = "with-project";
                break;
            case 4:
                name = "kWh año comprados";
                type = "with-project";
                break;
            case 5:
                name = "kWh vendidos";
                type = "with-project";
                break;
            case 6:
                name = "Total a pagar después del proyecto";
                type = "with-project";
                break;
            case 7:
                name = "Inversión";
                type = "investment";
                break;
            case 8:
                name = "Préstamo";
                type = "loan";
                break;
            case 9:
                name = "Diferencia de FF";
                type = "difference";
                break;
            case 10:
                name = "Diferencia de FF acumulada";
                type = "acc-difference";
                break;
        }
        cashflowItems.push({
            'name': name,
            '0': (index < 7 ? null : 0),
            '1': 0,
            '2': (index == 7 ? null : 0),
            '3': (index == 7 ? null : 0),
            '4': (index == 7 ? null : 0),
            '5': (index == 7 ? null : 0),
            '6': (index == 7 ? null : 0),
            '7': (index == 7 ? null : 0),
            '8': (index == 7 ? null : 0),
            '9': (index == 7 ? null : 0),
            '10': (index == 7 ? null : 0),
            '11': (index == 7 ? null : 0),
            '12': (index == 7 ? null : 0),
            '13': (index == 7 ? null : 0),
            '14': (index == 7 ? null : 0),
            '15': (index == 7 ? null : 0),
            '16': (index == 7 ? null : 0),
            '17': (index == 7 ? null : 0),
            '18': (index == 7 ? null : 0),
            '19': (index == 7 ? null : 0),
            '20': (index == 7 ? null : 0),
            '21': (index == 7 ? null : 0),
            '22': (index == 7 ? null : 0),
            '23': (index == 7 ? null : 0),
            '24': (index == 7 ? null : 0),
            '25': (index == 7 ? null : 0),
            'type': type});
    }

    cashflowTable = $('#cashflowTable').DataTable({
        'ordering': false,
        'searching': false,
        'paging': false,
        'info': false,
        "scrollX": true,
        'columns': [
            {data:"name"},
            {data:"0"},
            {data:"1"},
            {data:"2"},
            {data:"3"},
            {data:"4"},
            {data:"5"},
            {data:"6"},
            {data:"7"},
            {data:"8"},
            {data:"9"},
            {data:"10"},
            {data:"11"},
            {data:"12"},
            {data:"13"},
            {data:"14"},
            {data:"15"},
            {data:"16"},
            {data:"17"},
            {data:"18"},
            {data:"19"},
            {data:"20"},
            {data:"21"},
            {data:"22"},
            {data:"23"},
            {data:"24"},
            {data:"25"}
        ],
        'ajax': function (data, callback, settings) {
                callback({ data: cashflowItems })
        },
        fixedColumns:   {
            leftColumns: 1
        },
        columnDefs: [
            { targets: '_all', className: 'dt-right' }
        ],
        "createdRow": function( row, data, dataIndex){
            $(row).addClass(data.type);
        }
    });

    function resizeRadiationTable() {
        $('#cashflowTable').css('width', '100%');
        cashflowTable.draw(true);
    }

    function calculateCashflow() {
        var energyBuyed = 0;
        var energySold = 0;
        recovery_years.set(0);
        radiationItems.forEach(element => {
            energyBuyed += element.energy_buyed;
            energySold += element.energy_sold;
        });
        
        for (let index = 0; index <= 25; index++) {
            if (index >= 1) {
                cashflowItems[1][index] = annual_consumption.getNumber();
                cashflowItems[2][index] = roundTo(cashflowItems[0][index] * cashflowItems[1][index], 2);
                cashflowItems[4][index] = energyBuyed;
                cashflowItems[5][index] = energySold;

                cashflowItems[6][index] = roundTo((cashflowItems[0][index] * cashflowItems[4][index]) - (cashflowItems[3][index] * cashflowItems[5][index]), 0);
            }
            
            cashflowItems[9][index] = cashflowItems[2][index] - cashflowItems[6][index] + cashflowItems[8][index] - cashflowItems[7][index];

            if (index >= 1) {
                cashflowItems[10][index] = cashflowItems[10][index - 1] + cashflowItems[9][index];
            } else {
                cashflowItems[10][index] = cashflowItems[9][index];
            }

            if (recovery_years.getNumber() == 0 && cashflowItems[10][index] >= 0) {
                recovery_years.set(index - 1);
            }
        }
        cashflowTable.ajax.reload();
        cashflowTable.columns.adjust().draw();
        updateCashflowChart();
        discountRateUpdated();
        //calculateTir();
    }

    function updateCashflowChart() {
        for (let index = 0; index <= 25; index++) {
            dataCashflow[index] = cashflowItems[10][index];
        }
        cashflowChart.update();
    }

    //$(window).resize(resizeRadiationTable);
</script>