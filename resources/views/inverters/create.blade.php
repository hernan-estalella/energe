@extends('layouts.app')
@section('custom_styles')
@endsection
@section('content')
    <div class="container">
        <h3>Crear nuevo inversor</h3>
        <a href="{{ route('inverters.index') }}" class="btn btn-secondary">Cancelar y volver</a>
        <hr>
        <div class="clearfix"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form method="post" action="{{route('inverters.store')}}" id="form">
                @include('inverters.form')
                <div class="clearfix"></div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom_scripts')
    @include('autonumeric.js')
    @include('inverters.js')
@endsection