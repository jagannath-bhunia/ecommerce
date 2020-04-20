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
                        <div class="container">
 
 <div class="row">
     <div class="col-lg-12 col-sm-12 col-12 main-section">
         <div class="dropdown">
             <button type="button" class="btn btn-info" data-toggle="dropdown">
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
             </button>
             <div class="dropdown-menu">
                 <div class="row total-header-section">
                     <div class="col-lg-6 col-sm-6 col-6">
                         <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                     </div>

                     <?php $total = 0 ?>
                     @foreach((array) session('cart') as $id => $details)
                         <?php $total += $details['price'] * $details['quantity'] ?>
                     @endforeach

                     <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                         <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                     </div>
                 </div>

                 @if(session('cart'))
                     @foreach(session('cart') as $id => $details)
                         <div class="row cart-detail">
                             <!-- <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                 <img src="{{asset('uploads/item/' . $details['image']  )}}" />
                             </div> -->
                             <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                 <p></p>
                                 <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                             </div>
                         </div>
                     @endforeach
                 @endif
                 <div class="row">
                     <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                         <a href="{{ url('cartindex') }}" class="btn btn-primary btn-block">View all</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>




<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                   
                                    <a href="{{route('userlogout')}}" class="au-btn au-btn-icon au-btn--blue">
                                        logout</a>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </header>
           