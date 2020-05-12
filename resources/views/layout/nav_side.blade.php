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
