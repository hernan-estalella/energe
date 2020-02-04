@csrf
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Constantes</div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-2">
                        <label>ARS/USD</label>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="cotization">
                            <div class="input-group-append">
                              <button class="btn btn-outline-success" type="button" data-toggle="tooltip" data-placement="top" title="Predeterminado"><i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <label>Conversión KG CO2</label>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="kg_co2">
                            <div class="input-group-append">
                                <span class="input-group-text">kg/kwh</span>
                              <button class="btn btn-outline-success" type="button" data-toggle="tooltip" data-placement="top" title="Predeterminado"><i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <label>Conversión árboles</label>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="trees">
                            <div class="input-group-append">
                              <button class="btn btn-outline-success" type="button" data-toggle="tooltip" data-placement="top" title="Predeterminado"><i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-2">
                        <label>Límite beneficio</label>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="benefict">
                            <div class="input-group-append">
                              <button class="btn btn-outline-success" type="button" data-toggle="tooltip" data-placement="top" title="Predeterminado"><i class="fas fa-check-double"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-1">
                        <label>USD/KWp</label>
                        <input type="text" class="form-control form-control-sm" name="benefict">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-3">
        @include('commons.asterix-sm')<label>Cliente</label>
        <select class="selectpicker" name="client_id">
            @foreach($clients as $client)
            <option value="{{$client->id}}">{{$client->name}}</option>
            @endforeach
        </select>
    </div>
</div>