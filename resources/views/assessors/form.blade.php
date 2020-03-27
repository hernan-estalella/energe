@include('errors')
@csrf
<div class="row">
    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
        @include('commons.asterix-sm')<label>Nombre</label><br/>
        <input type="text" name="name" class="form-control" placeholder="Nombre" 
        @if (old('name') !== null) value="{{old('name')}}"
        @elseif(isset($assessor)) value="{{ $assessor->name }}"
        @endif>
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <label>Correo electrónico</label><br/>
        <input type="text" name="email" class="form-control" placeholder="Correo electrónico" 
        @if (old('email') !== null) value="{{old('email')}}"
        @elseif(isset($assessor)) value="{{ $assessor->email }}"
        @endif>
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <label>Teléfono</label><br/>
        <input type="text" name="telephone" class="form-control" placeholder="Teléfono" 
        @if (old('telephone') !== null) value="{{old('telephone')}}"
        @elseif(isset($assessor)) value="{{ $assessor->telephone }}"
        @endif>
    </div>
</div>
<hr>