@extends('layouts.app')
@section('custom_styles')
    @include('datatables.style')
@endsection
@section('content')
<div class="container">
	<h3>Clientes</h3>
	<h5><a href="{{ route('clients.create') }}" class="btn btn-success">Nuevo cliente</a></h5>
	<hr>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table id="table" class="stripe compact">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Dirección</th>
					<th class="fit"></th>
				</tr>
			</thead>
		</table>
    </div>
</div>
@endsection
@section('custom_scripts')
	@include('datatables.script')
    <script>
        $(document).ready(function() {
			var table = $('#table').DataTable( {
				"processing": true,
				"serverSide": true,
				"ajax": "{{route('clients.ajax')}}",
				"columns": [
					{data:"name"},
					{data:"address", orderable: false},
					{data:"actions", searchable: false, orderable: false},
				]
			});
		});
    </script>
@endsection