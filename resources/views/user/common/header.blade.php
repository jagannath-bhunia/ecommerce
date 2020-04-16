<header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="index.html"><img alt="" src="{{ URL::asset('user/img/logo/logo.png')}}"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>WANT TO TALK WITH US  +01254 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="{{ URL::asset('user/img/icon-img/menu.png')}}">
                                            <img class="s-close" alt="" src="{{ URL::asset('user/img/icon-img/menu-close.png')}}">
                                        </button>
                                        
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="{{route('user.index')}}">home</a></li>
                                                    <li class="active"><a href="about-us.html">about us </a></li>
                                                    <li><a href="#">shop</a>
                                                        <ul>
                                                            <li><a href="{{route('user.shop')}}">shop</a></li>
                                                            <!-- <li><a href="product-details.html">product details</a></li> -->
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="cart.html">cart</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">pages</a>
                                                        <ul>
                                                            <li><a href="about-us.html">about us</a></li>
                                                            <li><a href="cart.html">cart page</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="{{route('user.userloginform')}}">login</a></li>
                                                            <li><a href="contact.html">contact</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">blog</a>
                                                        <ul>
                                                            <li><a href="blog.html">blog</a></li>
                                                            <li><a href="blog-details.html">blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">contact us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>



                                    <!-- <li class="onhover-div user-icon" onclick="openAccount()" id="mobile3">
                                <img src="images/profile.png" alt="" class="user-img">
                                <a onclick="openAccount()"> Login</a>
                            </li> -->
                                </div>
                             
                            
                        </div>
                    </div>
                    
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                            <button class="icon-cart">
                                <i class="ti-shopping-cart"></i>
                                <span class="count-style">02</span>
                                <span class="count-price-add">$295.95</span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                            <span>Price: $275</span>
                                            <span>Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Demonissi Gori</a></h3>
                                            <span>Price: $275</span>
                                            <span class="qty">Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>total: <span>$550.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a class="btn-style cr-btn" href="#">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
           