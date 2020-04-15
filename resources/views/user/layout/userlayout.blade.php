<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce HTML5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('user/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/animate.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/chosen.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/icofont.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/bundle.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/style.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('user/css/responsive.css')}}">
        <script src="{{ URL::asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <div class="wrapper">		
<!-- header section start -->
@include("user.common.header")
<!-- header section end -->
<!--section start-->

@yield("body")
<!--Section ends-->

<!-- footer section start -->
@include("user.common.footer")

<!-- footer section end -->


<!--modal popup start-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="assets/img/quick-view/l1.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="assets/img/quick-view/l2.jpg" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="assets/img/quick-view/l3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                        <img src="assets/img/quick-view/s1.jpg" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab">
                                        <img src="assets/img/quick-view/s2.jpg" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab">
                                        <img src="assets/img/quick-view/s3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Aerion Carbon Helmet</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--modal popup end-->

<!-- all js here -->
<script src="{{ URL::asset('user/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{ URL::asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <script src="{{ URL::asset('user/js/popper.js')}}"></script>
        <script src="{{ URL::asset('user/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('user/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('user/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('user/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ URL::asset('user/js/waypoints.min.js')}}"></script>
        
        <script src="{{ URL::asset('user/js/owl.carousel.min.js')}}"></script>
        <script src="{{ URL::asset('user/js/plugins.js')}}"></script>
        <script src="{{ URL::asset('user/js/main.js')}}"></script>
        <script src="{{ URL::asset('user/js/instafeed.js')}}"></script>

        </body>
</html>