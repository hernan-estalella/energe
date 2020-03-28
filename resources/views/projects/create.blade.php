@extends('layouts.app')
@section('custom_styles')
    @include('datetimepicker.style')
    @include('bootstrap-select.style')
    @include('bootstrap-toggle.style')
    @include('chartsjs.style')
    @include('datatables.style')
@endsection
@section('content')
    <div class="container-fluid">
        <h3>Crear nuevo proyecto</h3>
        {{-- <a href="{{ route('members.index') }}" class="btn btn-secondary">{{__('Cancel and return')}}</a> --}}
        <hr>
        <div class="clearfix"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @include('projects.form')
            <div class="clearfix"></div>
            <hr>
            <div class="row justify-content-center">
                <div class="form-group col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <button id="save-btn" type="button" class="btn btn-success btn-block btn-lg" onclick="save();">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    @include('projects.modals.new-client')
@endsection
@section('custom_scripts')
    @include('datetimepicker.script')
    @include('bootstrap-select.script')
    @include('autonumeric.js')
    @include('bootstrap-toggle.script')
    @include('chartsjs.script')
    @include('datatables.script')
    @include('projects.js')
    @include('projects.constants-js')
    @include('projects.project-js')
    @include('projects.invoices-js')
    @include('projects.proposals-js')
    {{-- @include('projects.loan-js') --}}
    @include('projects.recovery-js')
    @include('projects.cashflow-js')
@endsection