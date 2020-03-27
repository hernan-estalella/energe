<div class="tab-pane active" id="project" role="tabpanel">
    <div class="row">
        <div class="form-group col-2">
            @include('commons.asterix-sm')<label>Cliente</label>
            <select class="selectpicker" name="client_id" onchange="setAddress();">
                @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-4">
            <label>Dirección</label>
            <p id="client_address"></p>
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