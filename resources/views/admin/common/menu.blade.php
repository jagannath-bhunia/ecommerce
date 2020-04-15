<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo inner-logo">
        <a href="#">
            <img src="{{ URL::asset('admin/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <a class="js-arrow" href="{{url('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Item</a>
                </li>                      
                <!-- <li class="{{ (request()->is('addcatagory')) ? 'active' : '' }}">
                    <a href="{{url('addcatagory')}}">
                        <i class="fas fa-chart-bar"></i>Add Catagory</a>
                </li> -->
                <li class="{{ (request()->is('showcatagory')) ? 'active' : '' }}">
                    <a href="{{url('showcatagory')}}">
                        <i class="fas fa-table"></i>Catagory</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>