<script>
    var consumptions = [];
    var values = [];
    var generations = [];

    var invoices = [];
    invoices.push(consumptions);
    invoices.push(values);
    invoices.push(generations);

    @for($i = 1; $i <= 12; $i++)
    consumption_{{$i}} = new AutoNumeric("#consumption_{{$i}}", integer);
    value_{{$i}} = new AutoNumeric("#value_{{$i}}", integer);
    generation_{{$i}} = new AutoNumeric("#generation_{{$i}}", integer);
    consumptions.push(consumption_{{$i}});
    values.push(value_{{$i}});
    generations.push(generation_{{$i}});
    @endfor

    annual_consumption = new AutoNumeric("#annual_consumption", integer);
    average_consumption = new AutoNumeric("#average_consumption", integer);
    kwh_cost = new AutoNumeric("#kwh_cost", decimal);
    hired_potency = new AutoNumeric("#hired_potency", integer);
    actual_kg_co2 = new AutoNumeric("#actual_kg_co2", integer);

function invoiceConsumptionUpdated(i) {
    calculateRadiation(i);
    calculateGeneration(i);
    annual_consumption.set(0);
    consumptions.forEach(consumption => {
        annual_consumption.set(annual_consumption.getNumber() + consumption.getNumber())
    });

    kgCo2Updated();

    calculateCashflow();

    /* var energyBuyed = 0;
    var energySold = 0;
    radiationItems.forEach(element => {
        energyBuyed += element.energy_buyed;
        energySold += element.energy_sold;
    });
    
    for (let index = 1; index <= 25; index++) {
        cashflowItems[1][index] = annual_consumption.getNumber();
        cashflowItems[2][index] = cashflowItems[0][index] * cashflowItems[1][index];
        cashflowItems[4][index] = energyBuyed;
        cashflowItems[5][index] = energySold;
    }
    cashflowTable.ajax.reload();
    cashflowTable.columns.adjust().draw(); */
}

function invoiceValueUpdated(i) {
    let j = 0;
    let totalValue = 0;
    values.forEach(value => {
        totalValue += value.getNumber();
        j++;
    });
    average_consumption.set(totalValue / j);
}

function kwhCostUpdated() {
    someInflationUpdated();
}
</script>