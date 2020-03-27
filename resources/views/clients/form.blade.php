@include('errors')
@csrf
<div class="row">
    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        @include('commons.asterix-sm')<label>Nombre</label><br/>
        <input type="text" name="name" class="form-control" placeholder="Nombre" 
        @if (old('name') !== null) value="{{old('name')}}"
        @elseif(isset($client)) value="{{ $client->name }}"
        @endif>
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        @include('commons.asterix-sm')<label>Dirección</label><br/>
        <input type="text" name="address" class="form-control" placeholder="Dirección" 
        @if (old('address') !== null) value="{{old('address')}}"
        @elseif(isset($client)) value="{{ $client->address }}"
        @endif>
    </div>
</div>
<hr>