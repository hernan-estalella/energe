<div class="tab-pane" id="invoices" role="tabpanel" aria-labelledby="invoices-tab">
    <div class="row">
        @for ($i = 1; $i <= 12; $i++)
        <div class="form-group col-1" @if($i % 2 == 0) style="background: whitesmoke" @endif>
            <label>
                @switch($i)
                    @case(1)
                        Enero
                        @break
                    @case(2)
                        Febrero
                        @break
                    @case(3)
                        Marzo
                        @break
                    @case(4)
                        Abril
                        @break
                    @case(5)
                        Mayo
                        @break
                    @case(6)
                        Junio
                        @break
                    @case(7)
                        Julio
                        @break
                    @case(8)
                        Agosto
                        @break
                    @case(9)
                        Septiembre
                        @break
                    @case(10)
                        Octubre
                        @break
                    @case(11)
                        Noviembre
                        @break
                    @case(12)
                        Diciembre
                        @break
                @endswitch
            </label>
            <div class="input-group input-group-sm mb-3">
            <input class="form-control" type="text" name="consumption_{{$i}}" id="consumption_{{$i}}" onblur="calculateRadiation({{$i}});">
                <div class="input-group-append">
                    <span class="input-group-text">kWh</span>
                </div>
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input class="form-control" type="text" name="value_{{$i}}" id="value_{{$i}}">
            </div> 
            <small>kWh generados</small>
            <div class="input-group input-group-sm mb-3">
                <input class="form-control" type="text" name="generation_{{$i}}" id="generation_{{$i}}" readonly>
                <div class="input-group-append">
                    <span class="input-group-text">kWh</span>
                </div>
            </div>
        </div>
        @endfor
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-1">
            <small>Consumo anual</small>
            <div class="input-group input-group-sm mb-3">
                <input class="form-control" type="text" name="" id="" readonly>
                <div class="input-group-append">
                    <span class="input-group-text">kW</span>
                </div>
            </div>
        </div>
        <div class="form-group col-1">
            <small>Cons. promedio</small>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input class="form-control" type="text" name="" id="" readonly>
            </div>
        </div>
        <div class="form-group col-1">
            <small>Costo kWh</small>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input class="form-control" type="text" name="" id="">
            </div>
        </div>
        <div class="form-group col-1">
            <small>Pot. contratada</small>
            <div class="input-group input-group-sm mb-3">
                <input class="form-control" type="text" name="" id="" readonly>
                <div class="input-group-append">
                    <span class="input-group-text">kW</span>
                </div>
            </div>
        </div>
        <div class="form-group col-1">
            <small>kg actual CO<sub>2</sub></small>
            <div class="input-group input-group-sm mb-3">
                <input class="form-control" type="text" name="" id="" readonly>
                <div class="input-group-append">
                    <span class="input-group-text">kg</span>
                </div>
            </div>
        </div>
    </div>
</div>