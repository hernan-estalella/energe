<ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="files" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('Files')}}
        </a>
        <div class="dropdown-menu" aria-labelledby="files">
            @can('users.index')
            <a href="{{route('users.index')}}" class="dropdown-item undecorated">{{__('Users')}}</a>
            @endcan
            @can('academic_degrees.index')
            <a href="{{route('academic_degrees.index')}}" class="dropdown-item undecorated">{{__('Academic degrees')}}</a>
            @endcan
            @can('specialities.index')
            <a href="{{route('specialities.index')}}" class="dropdown-item undecorated">{{__('Specialities')}}</a>
            @endcan
            @can('professionals.index')
            <a href="{{route('professionals.index')}}" class="dropdown-item undecorated">{{__('Professionals')}}</a>
            @endcan
            @can('medical_companies.index')
            <a href="{{route('medical_companies.index')}}" class="dropdown-item undecorated">{{__('Medical companies')}}</a>
            @endcan
            @can('patients.index')
            <a href="{{route('patients.index')}}" class="dropdown-item undecorated">{{__('Patients')}}</a>
            @endcan
            @can('appointments.index')
            <a href="{{route('appointments.index')}}" class="dropdown-item undecorated">{{__('Appointments')}}</a>
            @endcan
        </div>
    </li>
</ul>