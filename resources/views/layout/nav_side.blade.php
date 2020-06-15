<div class="sidebar-sticky">
    @if(strpos(Route::currentRouteName(), 'admin.') !== false)
        @include('layout.nav_admin_list')
    @else
        @include('layout.nav_regular_list')
    @endif

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
