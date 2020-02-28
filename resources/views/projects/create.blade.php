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
            <form method="post" action="{{route('projects.store')}}" id="form">
                @include('projects.form')
                <div class="clearfix"></div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button id="save-btn" type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
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
    @include('projects.recovery-js')
    @include('projects.cashflow-js')
<script type="text/javascript">
    $(function () {
        $('#form').submit(function(){
            $("#save-btn").html("Guardando...").attr("disabled", true);
        });
    });        
</script>
@endsection