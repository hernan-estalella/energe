<div class="tab-pane active" id="project" role="tabpanel">
    <div class="row">
        <div class="form-group col-2">
            @include('commons.asterix-sm')<label>Cliente</label>
            <select class="selectpicker" name="client_id">
                @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-3">
            <label>Ubicación</label>
            <p>Aca va la ubicación</p>
            <a href="https://www.google.com.ar/maps/@-32.770714,-68.7137594,14.46z" target="blank" class="btn btn-sm btn-success"><i class="fas fa-map-marker-alt"></i></a>
        </div>
        <div class="form-group col-1">
            @include('commons.asterix-sm')<label>Zona</label>
            <select class="selectpicker" name="zone_id" onchange="setRadiationValues()">
                @foreach($zones as $zone)
                <option value="{{$zone->id}}">{{$zone->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-2">
            @include('commons.asterix-sm')<label>Asesor</label>
            <select class="selectpicker" name="assessor_id">
                @foreach($assessors as $assessor)
                <option value="{{$assessor->id}}">{{$assessor->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>