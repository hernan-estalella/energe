@include('emails.templates.header')
<p>Hola {{ $data->patient->name }} {{ $data->patient->surname }}!</p>
<p>Hemos registrado un turno con los siguientes datos:</p>
<ul>
    <li><strong>Especialidad: </strong>@if (isset($data->professional->speciality)){{$data->professional->speciality->name}}@else--@endif</li>
    <li><strong>Profesional: </strong>@if (isset($data->professional->academic_degree)){{$data->professional->academic_degree->name}}@else--@endif {{ $data->professional->name }} {{ $data->professional->surname }}</li>
    <li><strong>Fecha:&nbsp;</strong>{{ date('d/m/Y' , strtotime($data->date)) }}</li>
    <li><strong>Hora:&nbsp;</strong>{{ $data->start_time }}</li>
    @if (isset($data->comments) && $data->comments != "")
        <li><strong>Observaciones:&nbsp;</strong>{{ $data->comments }}</li>
    @endif
</ul>
@include('reports.templates.instituteData')
{{-- <p>Para confirmar el turno por la web haga click&nbsp;<a href="http://www.lerniweb.com/fullmedical/{{ $data->link }}/confirm" target="_blank">aqui</a>.</p> --}}
<p style="text-align: right;"><em>Turno registrado el {{ date('d/m/Y' , time()) }} a las {{ date('H:i' , time()) }}</em></p>
@include('emails.templates.footer')