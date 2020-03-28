@include('errors')
@csrf
<div class="row">
    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        @include('commons.asterix-sm')<label>Nombre</label><br/>
        <input type="text" name="name" class="form-control" placeholder="Nombre" 
        @if (old('name') !== null) value="{{old('name')}}"
        @elseif(isset($zone)) value="{{ $zone->name }}"
        @endif>
    </div>
</div>
<hr>
<div class="row">
    <h4>Radiaciones</h4>
</div>
<div class="row">
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Ene</label><br/>
        <input type="text" name="m_1" id="m_1" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Feb</label><br/>
        <input type="text" name="m_2" id="m_2" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 conl-lg-1">
        @include('commons.asterix-sm')<label>Mar</label><br/>
        <input type="text" name="m_3" id="m_3" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Abr</label><br/>
        <input type="text" name="m_4" id="m_4" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>May</label><br/>
        <input type="text" name="m_5" id="m_5" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Jun</label><br/>
        <input type="text" name="m_6" id="m_6" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Jul</label><br/>
        <input type="text" name="m_7" id="m_7" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Ago</label><br/>
        <input type="text" name="m_8" id="m_8" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Sep</label><br/>
        <input type="text" name="m_9" id="m_9" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Oct</label><br/>
        <input type="text" name="m_10" id="m_10" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Nov</label><br/>
        <input type="text" name="m_11" id="m_11" class="form-control right">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-1 col-lg-1">
        @include('commons.asterix-sm')<label>Dic</label><br/>
        <input type="text" name="m_12" id="m_12" class="form-control right">
    </div>
</div>
<hr>