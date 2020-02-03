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