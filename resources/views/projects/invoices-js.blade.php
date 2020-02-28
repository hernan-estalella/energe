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
</script>