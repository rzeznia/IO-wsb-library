<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link {{Route::is('admin.dash') ? 'active' : ''}}" href="{{route('dash')}}">
            <i class="fas fa-home"></i>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.user.*') ? 'active' : ''}}" href="{{route('admin.user.index')}}">
            <i class="fas fa-user"></i>
            User Details <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.author.*') ? 'active' : ''}}" href="{{route('admin.author.index')}}">
            <i class="fa fa-address-book-o"></i>
            Authors <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.title.*') ? 'active' : ''}}" href="{{route('admin.title.index')}}">
            <i class="fa fa-address-book"></i>
            Titles <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.release.*') ? 'active' : ''}}" href="{{route('admin.release.index')}}">
            <i class="fa fa-paperclip"></i>
            Releases <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.piece.*') ? 'active' : ''}}" href="{{route('admin.piece.index')}}">
            <i class="fas fa-book"></i>
            Pieces <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.publisher.*') ? 'active' : ''}}" href="{{route('admin.publisher.index')}}">
            <i class="fa fa-user"></i>
            Publishers <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.reservation.*') ? 'active' : ''}}" href="{{route('admin.reservation.index')}}">
            <i class="fa fa-check-circle-o"></i>
            Reservations <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.hire.*') ? 'active' : ''}}" href="{{route('admin.hire.index')}}">
            <i class="fas fa-check-circle"></i>
            Hires <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.regal.*') ? 'active' : ''}}" href="{{route('admin.regal.index')}}">
            <i class="fa fa-bookmark-o"></i>
            Regals <span class="sr-only">(current)</span>
        </a>
    </li>
    <li>
        <a class="nav-link {{Route::is('admin.localization.*') ? 'active' : ''}}" href="{{route('admin.localization.index')}}">
            <i class="fas fa-map-pin"></i>
            Localizations <span class="sr-only">(current)</span>
        </a>
    </li>
</ul>
