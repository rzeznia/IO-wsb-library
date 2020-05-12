<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">WSB-IO Library</a>

<a class="nav-item active" style="color: rgba(255,255,255,.5)"><i class="fas fa-user"> </i> TBD: User type</a>

<ul class="nav navbar-nav d-inline-block float-right mr-2 ">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarlogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> {{\Auth::user()->name}}
        </a>
        <div class="dropdown-menu dropdown-menu-right ml-auto position-absolute" aria-labelledby="navUser">
            <a class="dropdown-item" href="#"><i class="fa fa-cog"> </i> Settings</a>
            <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>
    </li>
</ul>
