<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LerniWeb') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/icon.png') }}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('custom_styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LerniWeb') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if(!Request::is('/') && !Request::is('home') && !Request::is('login'))
                        @auth
                            @includeWhen(Auth::user()->type === 'USER', 'menu.user-bar')
                            @includeWhen(Auth::user()->type === 'PROFESSIONAL', 'menu.professional-bar')
                            @includeWhen(Auth::user()->type === 'PATIENT', 'menu.patient-bar')
                        @endauth
                    @endif
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @switch(Auth::user()->type)
                                        @case('MEMBER')
                                            {{ Auth::user()->member->fullname }}
                                            @break
                                        @case('TRAINER')
                                            {{ Auth::user()->trainer->fullname }}
                                            @break
                                        @case('ADMIN')
                                            {{ Auth::user()->admin->fullname }}
                                            @break
                                    @endswitch
                                     <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                        @if(config('app.multiLang'))
                            @php $locale = session()->get('locale'); @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @switch($locale)
                                        @case('en')
                                        <img src="{{asset('img/lang/en.png')}}" width="24px">
                                        @break
                                        @default
                                        <img src="{{asset('img/lang/es.png')}}" width="24px">
                                    @endswitch
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="lang/es"><img src="{{asset('img/lang/es.png')}}" width="24px"> Español</a>
                                    <a class="dropdown-item" href="lang/en"><img src="{{asset('img/lang/en.png')}}" width="24px"> English</a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div> --}}
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--@include('layouts.footer')-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('layouts.notification')
    @yield('custom_scripts')
</body>
</html>