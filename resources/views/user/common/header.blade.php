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
                                <li class="active"><a href="{{route('user.aboutus')}}">about us </a></li>
                                <li><a href="{{route('user.shop')}}">shop</a>
                                    <ul>
                                        <li><a href="{{route('user.shop')}}">shop</a></li>
                                        <!-- <li><a href="product-details.html">product details</a></li> -->
                                        <li><a href="{{route('user.checkout')}}">checkout</a></li>
                                        <!-- <li><a href="wishlist.html">wishlist</a></li> -->
                                        <li><a href="{{ url('cartindex') }}">cart</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="{{route('user.aboutus')}}l">about us</a></li>
                                        <li><a href="{{ url('cartindex') }}">cart page</a></li>
                                        <li><a href="{{route('user.checkout')}}">checkout</a></li>
                                        <!-- <li><a href="wishlist.html">wishlist</a></li> -->
                                        <li><a href="{{route('user.userloginform')}}">login</a></li>
                                        <li><a href="{{route('user.contuctus')}}">contact</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="#">blog</a>
                                    <ul>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{route('user.contuctus')}}">contact us</a></li>
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
         <a href="{{ url('cartindex') }}">
             <button type="button" class="btn btn-info" >
             
                  Cart <span id="a" class="badge badge-pill badge-danger"></span>
             </button></a>
             
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

            <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
</script>
           <script>
           
           $(document).ready(function(){
            abc();
        });

        function abc(){
            //alert("abcd");
            $.ajax({
                url:"{{ route('user.qty') }}",
                type:'POST',
               
                data: {_token: '{{ csrf_token() }}'},
                success: function (response) {
                    //alert(response);
                    $('#a').html(response);
                   //window.location.reload();
               }
            });
         
        }
           
           </script>