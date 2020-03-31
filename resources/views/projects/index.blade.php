@extends('layouts.app')
@section('custom_styles')
    @include('datetimepicker.style')
    @include('datatables.style')
@endsection
@section('content')
<div class="container">
	<h3>Proyectos</h3>
	<h5><a href="{{ route('projects.create') }}" class="btn btn-success">Nuevo proyecto</a></h5>
	<hr>
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="form-group col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<label>Desde</label>
							<input type="text" class="form-control datetimepicker-input" id="since" data-toggle="datetimepicker" data-target="#since" readonly/>
						</div>
						<div class="form-group col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<label>Hasta</label>
							<input type="text" class="form-control datetimepicker-input" id="until" data-toggle="datetimepicker" data-target="#until" readonly/>
						</div>
						<div class="form-group col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<label>&nbsp;</label>
							<button type="button" id="reload" class="btn btn-success btn-block">Actualizar&nbsp;<i class="fas fa-sync"></i></button>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>	
	<br>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table id="table" class="stripe compact">
			<thead>
				<tr>
					<th>#</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Asesor</th>
					<th class="fit"></th>
				</tr>
			</thead>
		</table>
    </div>
</div>
@endsection
@section('custom_scripts')
    @include('datetimepicker.script')
	@include('datatables.script')
    <script>
        $(document).ready(function() {
			$('#since').datetimepicker($.extend({}, tempus_date, {
				defaultDate: moment().startOf('month'),
    			maxDate: moment()
			}));
			$('#until').datetimepicker($.extend({}, tempus_date, {
				maxDate: moment()
			}));
			$("#since").on('change.datetimepicker', function(e) {
				$('#until').datetimepicker('minDate',e.date);
			});
			$("#until").on('change.datetimepicker', function(e) {
				$('#since').datetimepicker('maxDate',e.date);
			});

			var table = $('#table').DataTable( {
				"processing": true,
				"serverSide": true,
                ajax: {
					url: "{{route('projects.ajax')}}",
					type: "post",
					data: function(d) {
						d.since = $('#since').datetimepicker('date').format("YYYY-MM-DD");
                        d.until = $('#until').datetimepicker('date').format("YYYY-MM-DD");
                        d._token = '{{csrf_token()}}';
					}
				},
				"columns": [
					{data:"id", searchable: false},
					{data:"created_at", searchable: false},
					{data:"client_name"},
					{data:"assessor_name"},
					{data:"actions", searchable: false, orderable: false},
				]
			});
			$('#reload').on('click', function (event) {
				event.preventDefault();
				table.ajax.reload();
			});
		});
    </script>
@endsection