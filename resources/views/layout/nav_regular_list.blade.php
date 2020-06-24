<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link {{Route::is('dash') ? 'active' : ''}}" href="{{route('dash')}}">
            <i class="fas fa-home"></i>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('book.*') ? 'active' : ''}}" href="{{route('book.index')}}">
            <i class="fas fa-book-open"></i>
            Find a book<span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('mybook.*') ? 'active' : ''}}" href="{{route('mybook.index')}}">
            <i class="fas fa-book-reader"></i>
            My reservations <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::is('panel.*') ? 'active' : ''}}" href="{{route('panel.index')}}">
            <i class="fas fa-user"></i>
            User Panel <span class="sr-only">(current)</span>
        </a>
    </li>

</ul>
