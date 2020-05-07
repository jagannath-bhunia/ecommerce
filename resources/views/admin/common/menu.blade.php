<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo inner-logo">
        <a href="#">
            <img src="{{ URL::asset('admins/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ (request()->is('admin.dashboard')) ? 'active' : '' }}">
                    <a class="js-arrow" href="{{route('admin.dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Item</a>
                </li>                      
                <!-- <li class="{{ (request()->is('addcatagory')) ? 'active' : '' }}">
                    <a href="{{url('addcatagory')}}">
                        <i class="fas fa-chart-bar"></i>Add Catagory</a>
                </li> -->
                <li class="{{ (request()->is('admin.showcatagory')) ? 'active' : '' }}">
                    <a href="{{route('admin.showcatagory')}}">
                        <i class="fas fa-table"></i>Catagory</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>