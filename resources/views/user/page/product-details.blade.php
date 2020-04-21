@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" >
                        <h2 style="color:black">product details </h2>
                        <ul>
                            <li>
                                <a href="{{route('user.index')}}" style="color:black">home</a>
                            </li>
                            <li style="color:black" >product details </li>
                        </ul>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
            <div class="product-details-area fluid-padding-3 ptb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="pro-details1">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="">
                                                    <img src="{{asset('uploads/item/' . $item['image']  )}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                                        <a class="active" href="#pro-details1">
                                            <img src="{{ URL::asset('user/img/product-details/s1.jpg')}}" alt="">
                                        </a>
                                        <a href="#pro-details2">
                                            <img src="{{ URL::asset('user/img/product-details/s2.jpg')}}" alt="">
                                        </a>
                                        <a href="#pro-details3">
                                            <img src="{{ URL::asset('user/img/product-details/s3.jpg')}}" alt="">
                                        </a>
                                        <a href="#pro-details4">
                                            <img src="{{ URL::asset('user/img/product-details/s4.jpg')}}" alt="">
                                        </a>
                                        <a href="#pro-details5">
                                            <img src="{{ URL::asset('user/img/product-details/s3.jpg')}}" alt="">
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2>{{$item['name']}}</h2>
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <span> ( 01 Customer Review )</span>

                                   
                                    <!-- <input type="hidden" id="item_id" value="{{$item['id']}}">
                                    <input type="hidden" id="user_id" value=""> -->
                                </div>
                                <div class="product-price">
                                    <span>${{$item['price']}}</span>
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Product Overview</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                </div>
                                <div class="product-color">
                                    <h5 class="pd-sub-title">Product color</h5>
                                    <ul>
                                        <li class="red">b</li>
                                        <li class="pink">p</li>
                                        <li class="blue">b</li>
                                        <li class="sky2">b</li>
                                        <li class="green">y</li>
                                        <li class="purple2">g</li>
                                    </ul>
                                </div>
                                <div class="quickview-plus-minus">
                                <figure>
                                        <figcaption>Quantity</figcaption>
                                        <div class="form-group--number">
                                            <button class="up"><i class="fa fa-plus"></i></button>
                                            <button class="down"><i class="fa fa-minus"></i></button>
                                            <input class="form-control gst1" id="value" type="text" value="1" placeholder="1">
                                        </div>
                                    </figure>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style cr-btn" id="addtocart"><span>add to cart</span></a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover cr-btn" href="{{route('user.checkout')}}"><span><i class="icofont icofont-heart-alt"></i></span></a>
                                    </div>
                                </div>
                                <!-- <div class="product-categories">
                                    <h5 class="pd-sub-title">Categories</h5>
                                    <ul>
                                        <li>
                                            <a href="#">fashion ,</a>
                                        </li>
                                        <li>
                                            <a href="#">electronics ,</a>
                                        </li>
                                        <li>
                                            <a href="#">toys ,</a>
                                        </li>
                                        <li>
                                            <a href="#">food ,</a>
                                        </li>
                                        <li>
                                            <a href="#">jewellery </a>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="product-share">
                                    <h5 class="pd-sub-title">Share</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="item_id" id="item_id" value="{{$item['id']}}">
                <input type="hidden" id="_token" value="<?php echo csrf_token();?>">
            </div>

<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
</script>
<script>
$(document).ready(function(){
    // alert("abc");
     $(".up").click(function(){
        
        //alert("abc");
        var value1=$("#value").val();

    var value2=Number(value1)+1;
    //alert(value2);

    $('#value').val(value2);

    });



    $(".down").click(function(){

    var value1=$("#value").val();
    var value2=Number(value1)-1;
    if(value2<=0)
    {
    $('.value').val(1);
    }
    else{
    $('#value').val(value2);

    }
    });
});




$('#addtocart').click(function(){
    //alert("a");
    var item_id=$("#item_id").val();
    var qty=$("#value").val();
    var token=$("#_token").val();
    var url="{{ route('user.add-to-cart') }}";
    //alert(token);
    $.ajax({
    url:url,
    type:'GET',
    data:{qty:qty,_token:token,item_id:item_id},
   
        success:function(response)
        {
            abc();
        }
    });
});




</script>
@endsection
