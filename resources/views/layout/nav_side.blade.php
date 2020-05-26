<div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{Route::is('dash') ? 'active' : ''}}" href="{{route('dash')}}">
                <i class="fas fa-home"></i>
                Dashboard <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('user.*') ? 'active' : ''}}" href="{{route('user.index')}}">
                <i class="fas fa-user"></i>
                User Details <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('author.*') ? 'active' : ''}}" href="{{route('author.index')}}">
                <i class="fa fa-address-book-o"></i>
                Authors <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('title.*') ? 'active' : ''}}" href="{{route('title.index')}}">
                <i class="fa fa-address-book"></i>
                Titles <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('release.*') ? 'active' : ''}}" href="{{route('release.index')}}">
                <i class="fa fa-paperclip"></i>
                Releases <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('piece.*') ? 'active' : ''}}" href="{{route('piece.index')}}">
                <i class="fas fa-book"></i>
                Pieces <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('publisher.*') ? 'active' : ''}}" href="{{route('publisher.index')}}">
                <i class="fa fa-user"></i>
                Publishers <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('reservation.*') ? 'active' : ''}}" href="{{route('reservation.index')}}">
                <i class="fa fa-check-circle-o"></i>
                Reservations <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('hire.*') ? 'active' : ''}}" href="{{route('hire.index')}}">
                <i class="fas fa-check-circle"></i>
                Hires <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('regal.*') ? 'active' : ''}}" href="{{route('regal.index')}}">
                <i class="fa fa-bookmark-o"></i>
                Regals <span class="sr-only">(current)</span>
            </a>
        </li>
        <li>
            <a class="nav-link {{Route::is('localization.*') ? 'active' : ''}}" href="{{route('localization.index')}}">
                <i class="fas fa-map-pin"></i>
                Localizations <span class="sr-only">(current)</span>
            </a>
        </li>
    </ul>
    @if(isset($results))
        @include('contents.search.compo.filters')
    @endif
</div>
<style>
    li a{
        font-size: 18px;
    }
    li i{
        margin-right: 0.5rem !important;
    }
</style>
