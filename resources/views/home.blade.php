@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Presupuestador
                    {{-- @include('menu.admin') --}}
                    {{-- @if (Auth::user()->type === 'MEMBER')
                        Es un socio
                        
                    @elseif (Auth::user()->type === 'TRAINER')
                        Es un trainer
                        
                    @elseif (Auth::user()->type === 'ADMIN')
                        @include('menu.admin')
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
