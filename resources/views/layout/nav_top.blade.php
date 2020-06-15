<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">WSB-IO Library</a>
<ul class="nav navbar-nav d-inline-block float-right mr-2 form-inline">
    @role('admin')
        <li class="nav-item" style="float: left">
            <a class="nav-user nav-link @if(strpos(Route::currentRouteName(), 'admin.') !== 0) active @endif" href="{{route('dash')}}"><i class="fa fa-user-alt"></i> Regular Mode</a>
        </li>
        <li class="nav-item" style="float: left">
            <a class="nav-user nav-link @if(strpos(Route::currentRouteName(), 'admin') !== false) active @endif" href="{{route('admin.dash')}}"><i class="fa fa-user-shield"></i> Admin Mode</a>
        </li>
    @endrole


    <li class="nav-item dropdown ml-2" style="float: left">
        <a class="nav-link dropdown-toggle" style="padding-left: 1rem" href="#" id="navbarlogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-cog"></i> {{\Auth::user()->name}}
        </a>
        <div class="dropdown-menu dropdown-menu-right ml-auto position-absolute" aria-labelledby="navUser">
            <a class="dropdown-item" href="#"><i class="fa fa-cog"> </i> Settings</a>
            <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>
    </li>
</ul>
