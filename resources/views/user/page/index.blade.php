@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<div class="slider-area">

                <div class="slider-active owl-carousel">
                    <div class="single-slider slider-1" style="background-image: {{ URL::asset('user/img/slider/slider-bg.jpg')}}">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{ URL::asset('user/img/slider/bike-1.png')}}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                    <img class="animated" src="{{ URL::asset('user/img/icon-img/bike.png')}}" alt="slider images">
                                </div>
                                <h2 class="animated">MOTORCYCLE</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: {{ URL::asset('user/img/slider/slider-bg.jpg')}}">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{ URL::asset('user/img/slider/bike-2.png')}}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                    <img class="animated" src="{{ URL::asset('user/img/icon-img/bike.png')}}" alt="slider images">
                                </div>
                                <h2 class="animated">MOTORCYCLE</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: {{ URL::asset('user/img/slider/slider-bg.jpg')}}">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{ URL::asset('user/img/slider/bike-1.png')}}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                    <img class="animated" src="{{ URL::asset('user/img/icon-img/bike.png')}}" alt="slider images">
                                </div>
                                <h2 class="animated">MOTORCYCLE</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-social">
                    <ul>
                        <li class="facebook"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                    </ul>
                </div>
                
            </div>
            <div class="overview-area pt-135">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">
                                <h1><span>OSWAN</span> WORLD MOST </h1>
                                <h2>LATGEST <span>MOTORCYCLE STORE</span></h2>
                                <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                <div class="question-area">
                                    <h4>HAVE ANY QUESTION? </h4>
                                    <div class="question-contact">
                                        <div class="question-icon">
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                        <div class="question-content-number">
                                            <h6> 01245 658 698</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-img">
                                <img class="tilter" src="{{ URL::asset('user/img/banner/banner-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area pt-135 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{ URL::asset('user/img/banner/banner-1.jpg')}}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>BUY NEW BIKE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{ URL::asset('user/img/banner/banner-2.jpg')}}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>SELL YOUR BIKE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{ URL::asset('user/img/banner/banner-3.jpg')}}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>FIND SPARE PARTS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-area pb-190">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>CHOOSE YOUR BIKE</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" >
                            <h4>NEW BIKES </h4>
                        </a>
                        <!-- <a href="#home2" data-toggle="tab">
                            <h4> USED BIKES </h4>
                        </a> -->
                    </div>
                    <div class="tab-content jump">
                    <div class="product-slider-active owl-carousel">
                        @foreach($std as $item)
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{route('user.productdetails', $item->id)}}">
                                            <img src="{{asset('uploads/item/' . $item->image  )}}" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>{{$item->name}}</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>{{$item->price}}</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" onclick="add({{$item->id}})">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="{{route('user.productdetails', $item->id)}}">Gloriori GSX 250 R</a></h4>
                                                <span>6600 RPM</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="_token" value="<?php echo csrf_token();?>">
                            </div>
                        @endforeach
                            
                    </div>
                    </div>
                </div>
            </div>
            <div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: {{ URL::asset('user/img/banner/banner-4.jpg')}}">
                <div class="container-fluid">
                    <div class="latest-product-slider owl-carousel">
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{ URL::asset('user/img/banner/banner-2.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                        <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                        <div class="latest-price">
                                            <h3 class="animated">NOW AT <span>$1250</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">SELECT A BIKE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-col-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{ URL::asset('user/img/banner/banner-3.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-col-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                        <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                        <div class="latest-price">
                                            <h3 class="animated">NOW AT <span>$1250</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">SELECT A BIKE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="accessories-area pt-152 pb-130">
                <div class="container-fluid">
                    <div class="section-title section-fluid text-center mb-60">
                        <h2>ACCESSORIES</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="accessories-wrapper">
                        <div class="product-accessories-active owl-carousel">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('user/img/product/product-7.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $120</span>
                                            <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-8.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $180</span>
                                            <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-9.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $25</span>
                                            <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-10.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $140</span>
                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-11.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $150</span>
                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-7.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $150</span>
                                            <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-8.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $160</span>
                                            <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ URL::asset('user/img/product/product-9.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $120</span>
                                            <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="testimonial-area">
                <div class="container">
                    <div class="section-title-2 section-title-position">
                        <h2>OUR CLIENTS REVIEW</h2>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="{{ URL::asset('user/img/team/testimonial-1.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest  qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam quoten</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Rayed Ayash Hisham</h4>
                                            <span>COO, ASEKHA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="{{ URL::asset('user/img/team/testimonial-2.png')}}">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> Lorem ipsum dolor sit amet, consectetur adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis dolor in reprehenderit.</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>James Momen Nirob</h4>
                                            <span>CEO, ASEKHA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area pt-150 pb-110">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <h2>BLOG POST</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{ URL::asset('user/img/blog/blog-hm-1.jpg')}}" alt="image"></a>
                                    <div class="blog-date">
                                        <h4>24 February, 2018</h4>
                                    </div>
                                    <div class="blog-hm-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="blog-details.html">Sports Motorbike for play in desert </a></h3>
                                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{ URL::asset('user/img/blog/blog-hm-2.jpg')}}" alt="image"></a>
                                    <div class="blog-date">
                                        <h4>22 February, 2018</h4>
                                    </div>
                                    <div class="blog-hm-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="blog-details.html">Motorbike Racing at October</a></h3>
                                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{ URL::asset('user/img/blog/blog-hm-3.jpg')}}" alt="image"></a>
                                    <div class="blog-date">
                                        <h4>20 February, 2018</h4>
                                    </div>
                                    <div class="blog-hm-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="blog-details.html">Latest Motorbike Release this Year </a></h3>
                                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>
<script>
  
    function add($id){
        var token=$("#_token").val();
        var url="{{ route('user.add-to-cart') }}";

        $.ajax({
        url:url,
        type:'GET',
        data:{qty:1,_token:token,item_id:$id},
   
        success:function(response)
        {
            abc();
        }
    });

    }
</script>

@endsection

