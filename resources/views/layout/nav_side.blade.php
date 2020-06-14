<div class="sidebar-sticky">
    TODO: ADMIN/USER MODE LAYOUT
    @include('layout.nav_admin_list')
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
