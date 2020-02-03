<div class="card">
    <div class="card-header menu">
        <a class="btn btn-lg btn-link undecorated" data-toggle="collapse" data-target="#files" aria-expanded="true" aria-controls="files">
            Archivos
        </a>
    </div>
    <div id="files" class="collapse show">
        <div class="card-body">
            <div class="row">
                @can('admins.index')
                <div class="col-xs-4 col-sm-3 col-md-1 col-lg-1" style="text-align: center">
                    <a href="{{route('admins.index')}}" class="undecorated">
                        <img class="img-thumbnail" src="{{asset('img/menu/admins.png') }}" width="64px"/><br>{{__('Admins')}}
                    </a>
                </div>
                @endcan
                @can('trainers.index')
                <div class="col-xs-4 col-sm-3 col-md-1 col-lg-1" style="text-align: center">
                    <a href="{{route('trainers.index')}}" class="undecorated">
                        <img class="img-thumbnail" src="{{asset('img/menu/trainers.png') }}" width="64px"/><br>{{__('Trainers')}}
                    </a>
                </div>
                @endcan
                @can('members.index')
                <div class="col-xs-4 col-sm-3 col-md-1 col-lg-1" style="text-align: center">
                    <a href="{{route('members.index')}}" class="undecorated">
                        <img class="img-thumbnail" src="{{asset('img/menu/members.png') }}" width="64px"/><br>{{__('Members')}}
                    </a>
                </div>
                @endcan
                @can('activities.index')
                <div class="col-xs-4 col-sm-3 col-md-1 col-lg-1" style="text-align: center">
                    <a href="{{route('activities.index')}}" class="undecorated">
                        <img class="img-thumbnail" src="{{asset('img/menu/activities.png') }}" width="64px"/><br>{{__('Activities')}}
                    </a>
                </div>
                @endcan
                @can('plans.index')
                <div class="col-xs-4 col-sm-3 col-md-1 col-lg-1" style="text-align: center">
                    <a href="{{route('plans.index')}}" class="undecorated">
                        <img class="img-thumbnail" src="{{asset('img/menu/plans.png') }}" width="64px"/><br>{{__('Plans')}}
                    </a>
                </div>
                @endcan
            </div>       
        </div>
    </div>
</div>