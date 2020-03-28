@include('errors')
@csrf
<div class="row">
    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        @include('commons.asterix-sm')<label>Nombre</label><br/>
        <input type="text" name="name" class="form-control" placeholder="Nombre" 
        @if (old('name') !== null) value="{{old('name')}}"
        @elseif(isset($inverter)) value="{{ $inverter->name }}"
        @endif>
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('commons.asterix-sm')<label>Min. paneles</label><br/>
        <input type="text" name="min_panels" id="min_panels" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('commons.asterix-sm')<label>Máx. paneles</label><br/>
        <input type="text" name="max_panels" id="max_panels" class="form-control right">
    </div>
</div>
<hr>