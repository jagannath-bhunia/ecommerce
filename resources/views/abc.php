@extends('layouts.menu')
@section('body')

@foreach($product as $product1)
  @php($product_id=$product1->product_id)
  @guest
  @php($user_id=0)
  @else
  @php($user_id=Auth::user()->id)
  @endguest
  @php($image5=DB::table('product_images')->where('product_id',$product_id)->first())
  <input type="hidden" id="_token" value="<?php echo csrf_token();?>">
<header class="header header--product" data-sticky="true">
        <nav class="navigation">
            <div class="container">
                <article class="ps-product--header-sticky">
                    <div class="ps-product__thumbnail"><img src="product_image\{{$image5->product_image}}" alt=""></div>
                    <div class="ps-product__wrapper">
                        <div class="ps-product_content"><a class="ps-product_title" href="#">{{$product1->product_name}}</a>
                            <ul class="ps-tab-list">
                            <li class="active"><a href="#tab-1">Description</a></li>
                                <li><a href="#tab-2">Specification</a></li>
                                <li><a href="#tab-5">Features</a></li>
                                <li><a href="#tab-3">Vendor</a></li>
                                <li><a href="#tab-4">Reviews (<span id="total_review">{{$review}}</span>)</a></li>
                              
                            </ul>
                        </div>

                        @php($price=DB::table('product_prices')->where('product_id',$product_id)->first())
                        <div class="ps-product_shopping"><span class="ps-product_price"><span>  ₹{{$price->product_price}}</span>
                            <del>₹{{$product1->mrp}}</del></span>
                            
                        
                            
                            @guest


<a href="login" class="ps-btn" >Add to cart</a>

@else
@php($user_id=Auth::user()->id)


@php($pro=DB::table('carts')->where('product_id',$product_id)->where('user_id',$user_id)->count())
@if($pro==0)
<button class="ps-btn aa" id="ok2" >Add to cart</button>
   <a href="shopping_cart" class="ps-btn  ps-btn--black bb" style="display:none" id="">Go to Cart</a>
@else
<button class="ps-btn aa" id="ok2"  style="display:none" >Add to cart</button>
<a href="shopping_cart" class="ps-btn  ps-btn--black bb" id="">Go to Cart</a>
@endif
 @endguest                           
                            </div>
                    </div>
                </article>
            </div>
        </nav>
    </header>
    <nav class="navigation--mobile-product">  @php($pro=DB::table('carts')->where('product_id',$product_id)->where('user_id',$user_id)->count())
                            @if($pro==0)
                              <button class="ps-btn ps-btn--black aa" id="ok1">Add to cart</button>
                                 <a href="shopping_cart" class="ps-btn  ps-btn--black bb" style="display:none" id="">Go to Cart</a>
                             @else
                             <button class="ps-btn ps-btn--black aa" id="ok1" style="display:none" >Add to cart</button>
                              <a href="shopping_cart" class="ps-btn  ps-btn--black bb" id="">Go to Cart</a>
                          @endif<a class="ps-btn" onclick="booking({{$product_id}})">Buy Now</a></nav>
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
                <li><a href="shop?cat_id={{$product1->product_cat_id}}">{{$product1->cat_name}}</a></li>
                <li><a href="shop?sub_id={{$product1->product_sub_cat_id}}">{{$product1->sub_cat_name}}</a></li>
                <li><a href="shop?sub_sub_id={{$product1->product_sub_sub_cat_id}}">{{$product1->sub_sub_cat_name}}</a></li>
                <li>{{$product1->product_name}}</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--product">
        <div class="ps-container">
            <div class="ps-page__container">
                <div class="ps-page__left">
                    <div class="ps-product--detail ps-product--fullwidth">
                        <div class="ps-product__header">
                        @php($image=DB::table('product_images')->where('product_id',$product_id)->get())
                    <div class="ps-product__thumbnail" data-vertical="true">
                        <figure>
                            <div class="ps-wrapper">

                                <div class="ps-product__gallery" data-arrow="true">
                                @foreach($image as $images)
                                    <div class="item"><a href="product_image\{{$images->product_image}}"><img src="product_image\{{$images->product_image}}" alt=""></a></div>
                                     @endforeach
                                </div>
                               
                            </div>
                        </figure>
                        <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                        @foreach($image as $images)
                            <div class="item"><img src="product_image\{{$images->product_image}}" alt=""></div>
                              @endforeach
                        </div>
                    </div>
                            <div class="ps-product__info">
                            <h1>{{$product1->product_name}} &nbsp;
                                @if($product1->hsn !='')
                                ({{$product1->hsn}})
                                @endif</h1>
                                <div class="ps-product__meta">
                                    <p>Brand :<a href="#"> {{$product1->brand}}</a></p>
                                    <div class="ps-product__rating">
                                       
                            @php($a=(int)$product1->review)
                                                    
                                                    @for($i=0;$i<$a;$i++)
                                                             <i class="fa fa-star" style="color:#fcb800;"></i>
                                                    @endfor
                                                  
                                                    @if((is_float($product1->review)==0))
                                                        @php($t=5)
                                                        @else
                                                        @if(($product1->review!=0))
                                                        <i class="fa fa-star-half-o" style="color:#fcb800;"></i>
                                                        
                                                        @php($t=5-1)
                                                        @else
                                                        @php($t=5)
                                                        @endif

                                                    @endif

                                                    @for($i=0;$i<$t-$a;$i++)
                                                          <i class="fa fa-star-o" style="color:#fcb800;"></i>
                                                    @endfor

                           
                           <span>({{$review}} review)</span>
                                    </div>
                                </div>
                                @php($price=DB::table('product_prices')->where('product_id',$product_id)->get())
                        @foreach($price as $key=>$price1)
                        @if($key==0)
                        <h4 class="ps-product__price" style="color:green"> &#8377; {{$price1->product_price}} <del style="color:red;font-size: 1.7rem;">₹{{$product1->mrp}}</del></h4>
                        @endif
                         @if($key==1)
                         <p>For 3 to 20: <strong style="color:black"> &#8377; {{$price1->product_price}}</strong></p>
                          @endif
                           @if($key==2)
                         <p>20 and above: <strong style="color:black"> &#8377; {{$price1->product_price}}</strong></p>
                          @endif

                        @endforeach  <div class="ps-product__desc">
                                    
                                </div>
                                <div class="ps-product__shopping">






                                @if(($product1->product_group_id!=0))
                                    @if(!isset($_GET['color']))
                                                @php($co=$product1->color_name)
                                                @else
                                            @php($co=$_GET['color'])
                                        @endif
                                        @if(!isset($_GET['size']))
                                                @php($si=$product1->size)
                                         @else
                                            @php($si=$_GET['size'])
                                        @endif
                                        @if(!isset($_GET['group']))
                                            @php($gu=$product1->product_group_id)
                                        @else
                                            @php($gu=$_GET['group'])
                                        @endif


                                @php($color_count=DB::table('products')->where('product_group_id',$product1->product_group_id)->where('color_name','!=','NO')->where('size','=',$si)->count())
                             @if($color_count!=0)

                                   <figure style=" margin-bottom: 4px;">
                                        <figcaption>Color</figcaption>
                                        @php($color=DB::table('products')->where('product_group_id',$product1->product_group_id)->where('color_name','!=','NO')->where('size','=',$si)->groupby('color_name')->get())
                                       @foreach($color as $color1)
                                     <a href="product_details?name={{$product1->product_name}}&group={{$gu}}&color={{$color1->color_name}}&size={{$si}}">  <div class="ps-variant ps-variant--color " style="background-color:{{$color1->color_code}}">@if($color1->color_name==$product1->color_name)<!--<i style="color:white;padding: 20%;" class="fa fa-check "></i>-->@endif<span class="ps-variant__tooltip">{{$color1->color_name}}</span></div></a>
                          
                                       @endforeach         
                                       </figure>
                                    <figure>
                                    </figure>

                                @endif
                                @php($size_count=DB::table('products')->where('product_group_id',$product1->product_group_id)->where('color_name','=',$co)->where('size','!=','NO')->count())
                             @if($size_count!=0)

                                   

                                    <figure style="margin-bottom: 2px;">
                                        <figcaption>Size</figcaption>
                                        <div class="selectgroup selectgroup-pills">
                                       
                                        @php($size=DB::table('products')->where('product_group_id',$product1->product_group_id)->where('color_name','=',$co)->where('size','!=','NO')->groupby('size')->get())
                                       @foreach($size as $size1)
                                      
                                       <a href="product_details?name={{$product1->product_name}}&group={{$gu}}&color={{$co}}&size={{$size1->size}}">  <label class="selectgroup-item">
															<input type="text"  value="" class="selectgroup-input"  >
                                                           
															<span class="selectgroup-button" style="font-size: 14px;
                                                    @if($size1->size==$product1->size)
                                                            color: black;
                                                             border-color: black;
                                                             @endif
                                                             padding: 5px;">{{$size1->size}}
                                                               </span>
	 													</label></a>
                                            @endforeach           
                                            </div> 
                                             </figure>

                            @endif
                                @else
                                @if(($product1->color_name!='NO'))
                                <figure style=" margin-bottom: 4px;">
                                        <figcaption>Color</figcaption>
                                        <div class="ps-variant ps-variant--color checked" style="background-color:{{$product1->color_code}}"><i style="color:white;padding: 20%;" class="fa fa-check "></i><span class="ps-variant__tooltip">{{$product1->color_name}}</span></div>
                                </figure>
                                
                                <figure>
                                    </figure>
                                @endif
                                @if(($product1->size!='NO'))
                             
                                <figure style="margin-bottom: 2px;">
                                        <figcaption>Size</figcaption>
                                        <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
															<input type="radio"  value="" class="selectgroup-input" checked >
                                                           
															<span class="selectgroup-button" style="font-size: 14px;
                                                             padding: 5px;">{{$product1->size}}
                                                               </span>
	 													</label>
                                            </div>
                                           </figure>
                                           
                                    <figure>
                                    </figure>
                                @endif


                                @endif
                                    <figure style="    margin-bottom: 8px;">
                                        <figcaption>Delivery</figcaption>
                                            <div class="row" STYLE="padding-left:20px">
                                            <style>
                                            input[type=number] {
                                                -moz-appearance: textfield;
                                             }
                                             input::-webkit-outer-spin-button,
                                                input::-webkit-inner-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                                }
                                            </style>
                                                    <input type="number" placeholder="Enter Pincode" style="width:140px;border: solid 1px;" id="pin"><button id="pincheck" style="color:#5fa30f;width:80px" >Check</buttOn>&nbsp;<br><b><span id="pinstatus"></span></b>
                                            </div>

                                        </figure>
                                </div>
                         
                                <div class="ps-product__shopping">
                                    <figure>
                                        <figcaption>Quantity</figcaption>
                                        <div class="form-group--number">
                                            <button class="up"><i class="fa fa-plus"></i></button>
                                            <button class="down"><i class="fa fa-minus"></i></button>
                                            <input class="form-control gst1" id="value" type="text" value="1" placeholder="1">
                                        </div>
                                    </figure>
                                    
                                    <input type="hidden" id="product_id" value="<?php echo $product_id;?>">
                            @guest


                              <a href="login" class="ps-btn ps-btn--black" >Add to cart</a>

                            @else
                            @php($user_id=Auth::user()->id)
                            <input type="hidden" id="_token" value="<?php echo csrf_token();?>">
                            <input type="hidden" id="user_id" value="<?php echo $user_id;?>">
                            

                           @php($pro=DB::table('carts')->where('product_id',$product_id)->where('user_id',$user_id)->count())
                            @if($pro==0)
                              <button class="ps-btn aa" id="ok">Add to cart</button>
                                 <a href="shopping_cart" class="ps-btn  ps-btn--black bb" style="display:none" id="">Go to Cart</a>
                             @else
                             <button class="ps-btn aa" id="ok" style="display:none" >Add to cart</button>
                              <a href="shopping_cart" class="ps-btn  ps-btn--black bb" id="">Go to Cart</a>
                          @endif




                             @endguest
                   
                            
                            
                            <button class="ps-btn" onclick="booking({{$product_id}})" > Buy Now </button>
                            <div class="ps-product__actions">

                            @guest
                                @php($pro=0)
                            @else

                                 @php($pro=DB::table('wishlists')->where('product_id',$product_id)->where('user_id',$user_id)->count())
                           @endguest

                            @if($pro==0)
                            <i class="fa fa-heart" id="wishlistbutton" style="font-size: 35px;color: rgb(153, 153, 153);margin-bottom: 8px;" onclick="wishlisttoggle({{$product_id}})"></i>
                            @else
                            <i class="fa fa-heart" id="wishlistredbutton" style="color:red;font-size: 35px;margin-bottom: 8px;"  onclick="wishlisttoggle({{$product_id}})"></i>
                            @endif
                                    
                                    </div>
                                </div>
                                <div class="ps-product__specification"><a class="report" href="#">Report Abuse</a>
                            <p><strong>Product Code:</strong> INSTANT-{{ $product1->product_code}}</p>
                            
                            <p class="categories"><strong> Categories:</strong><a href="/shop?cat_id={{$product1->product_cat_id}}">{{$product1->cat_name}}</a>>><a href="/shop?sub_id={{$product1->product_sub_cat_id}}"> {{$product1->sub_cat_name}}</a>>><a href="/shop?sub_sub_id={{$product1->product_sub_sub_cat_id}}">{{$product1->sub_sub_cat_name}}</a></p>
                           
                        </div>
                                <div class="ps-product__sharing"><a class="facebook"  href="fb-messenger://share/?link=https://Check this out : {{$product1->product_name}}, click https://lansdeal.com/product_details?id={{$product1->product_id}}"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="https://www.twitter.com/share?text=Check this out : {{$product1->product_name}}, click &url=https://lansdeal.com/product_details?id={{$product1->product_id}}"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="https://plus.google.com/share?content=Check this out : {{$product1->product_name}}, click &url=https://lansdeal.com/product_details?id={{$product1->product_id}}"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="mailto:?subject=Lansdeal Product&amp;body=Check this out : {{$product1->product_name}}, click &url=https://lansdeal.com/product_details?id={{$product1->product_id}}"><i class="fa fa-envelope"></i></a>
                                <a class="" style="    background-color: #0bc30bba;" href="whatsapp://send?text=Check this out : {{$product1->product_name}}, click https://lansdeal.com/product_details?id={{$product1->product_id}}"><i class="fa fa-whatsapp"></i></a></div>
                            </div>
                            
                        </div>
                        <div class="ps-product__content ps-tab-root" style="background-color:white;padding:3%">
                            <ul class="ps-tab-list">
                                <li class="active"><a href="#tab-1">Description</a></li>
                                <li><a href="#tab-2">Specification</a></li>
                                <li><a href="#tab-5">Features</a></li>
                                <li><a href="#tab-3">Vendor</a></li>
                                <li><a href="#tab-4">Reviews (<span id="total_review">{{$review}}</span>)</a></li>
                              
                                
                            </ul>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-document">

                                    <p style="font-size: 25px;"><a href=""><strong>Description</strong></a></p>



 

                                      {{$product1->description}}
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="table-responsive">

                                    @php($specification=DB::table('specifications')->where('product_id',$product_id)->get())
                                    <p style="font-size: 25px;"><a href=""><strong>Specification</strong></a></p>


                                        <table class="table table-bordered ps-table ps-table--specification">
                                            <tbody>

                                            @foreach($specification as  $specification1)
                                                <tr>
                                                    <td>{{$specification1->specification_type}}</td>
                                                    <td>{{$specification1->specification_name}}</td>
                                                </tr>
                                             @endforeach  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-3">
                                   


 @php($vendor_id=$product1->vendor_id)
 @php($vendor=DB::table('users')->where('id',$vendor_id)->get())
  @foreach($vendor as $vendor1)
   <p><b>Vendor name : </b>{{$vendor1->name}}</p> 
  <p> <b>Vendor Email id : </b>{{$vendor1->email}}</p> 
  <p> <b>Vendor Phone no </b> : {{$vendor1->phone_no}}</p> 

  @endforeach




                                </div>
                                <div class="ps-tab" id="tab-4">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
                                            <div class="ps-block--average-rating">
                                                <div class="ps-block__header">
                                                    <h3>
                                                    
                                                    @if((is_float($product1->review)==0))
                                                    {{$product1->review}}.0
                                                    @else
                                                    {{$product1->review}}
                                                    @endif
                                                    </h3>
                                                 
                                                    @php($a=(int)$product1->review)
                                                    
                                                    @for($i=0;$i<$a;$i++)
                                                             <i class="fa fa-star" style="color:#fcb800;font-size:20px"></i>
                                                    @endfor
                                                  
                                                    @if((is_float($product1->review)==0))
                                                        @php($t=5)
                                                        @else
                                                        @if(($product1->review!=0))
                                                        <i class="fa fa-star-half-o" style="color:#fcb800;font-size:20px"></i>
                                                        
                                                        @php($t=5-1)
                                                        @else
                                                        @php($t=5)
                                                        @endif

                                                    @endif

                                                    @for($i=0;$i<$t-$a;$i++)
                                                          <i class="fa fa-star-o" style="color:#fcb800;font-size:20px"></i>
                                                    @endfor

                                                   <!-- <i class="fa fa-star" style="color:#fcb800;font-size:20px"></i>
                                                            <i class="fa fa-star" style="color:#fcb800;font-size:20px"></i>
                                                            <i class="fa fa-star" style="color:#fcb800;font-size:20px"></i>
                                                            <i class="fa fa-star-o" style="color:#fcb800;font-size:20px"></i>
                                                            <i class="fa fa-star-o" style="color:#fcb800;font-size:20px"></i>
                                                         -->   
                                                            <span>{{$review}} Review</span>
                                                </div>
                                                @if($review==0)
                                                <div class="ps-block__star"><span>5 Star</span>
                                                    <div class="ps-progress" data-value="0"><span></span></div><span>0%</span>
                                                </div>
                                                <div class="ps-block__star"><span>4 Star</span>
                                                    <div class="ps-progress" data-value="0"><span></span></div><span>0%</span>
                                                </div>
                                                <div class="ps-block__star"><span>3 Star</span>
                                                    <div class="ps-progress" data-value="0"><span></span></div><span>0%</span>
                                                </div>
                                                <div class="ps-block__star"><span>2 Star</span>
                                                    <div class="ps-progress" data-value="0"><span></span></div><span>0%</span>
                                                </div>
                                                <div class="ps-block__star"><span>1 Star</span>
                                                    <div class="ps-progress" data-value="0"><span></span></div><span>0%</span>
                                                </div>
                                                @else

                                               
                                                <div class="ps-block__star"><span>5 Star</span>
                                                    <div class="ps-progress" data-value="{{($fivestar/$review)*100}}"><span></span></div><span>{{round((($fivestar/$review)*100),2)}}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>4 Star</span>
                                                    <div class="ps-progress" data-value="{{($fourstar/$review)*100}}"><span></span></div><span>{{round((($fourstar/$review)*100),2)}}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>3 Star</span>
                                                    <div class="ps-progress" data-value="{{($threestar/$review)*100}}"><span></span></div><span>{{round((($threestar/$review)*100),2)}}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>2 Star</span>
                                                    <div class="ps-progress" data-value="{{($twostar/$review)*100}}"><span></span></div><span>{{round((($twostar/$review)*100),2)}}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>1 Star</span>
                                                    <div class="ps-progress" data-value="{{($onestar/$review)*100}}"><span></span></div><span>{{round((($onestar/$review)*100),2)}}%</span>
                                                </div>
                                                @endif
                                            </div>
                                                                      
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 " id="view_review">
                                        <!-- review start -->
                                       <form action="review_add" method="post">
                                       @csrf
                                       <div class="ps-form--review" >
                                                <h4>Submit Your Review</h4>
                                                <p>Please Review us for your thought<sup>*</sup></p>
                                                <div class="form-group form-group__rating">
                                                    <label>Your rating of this product</label>
                                                    <select class="ps-rating" data-read-only="false" id="review_value" name="review_value" required>
                                                       
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="6" id="review_details" name="review_details" placeholder="Write your review here" required></textarea>
                                                </div>
                                                @if($booking_count!=0)
                                                <input type="hidden" value="{{$book_muti_items_id2->book_muti_item_id}}" name="book_muti_item_id" id="book_muti_item_id">
                                                @endif
                                                @if(isset($_GET['id']))

                                                <input type="hidden" value="{{$_GET['id']}}" name="product_id">
                                                @elseif(isset($_GET['name']))

                                                @php($p_name=$_GET['name'])
                                               @php($name=DB::table('products')->where('product_name','LIKE', '%'.$p_name.'%')->first()) 
                                                <input type="hidden" value="{{$name->product_id}}" name="product_id">

                                                @elseif(isset($_GET['p_name']))

                                                @php($p_name=$_GET['p_name'])
                                               @php($name=DB::table('products')->where('product_name','LIKE', '%'.$p_name.'%')->first()) 
                                                <input type="hidden" value="{{$name->product_id}}" name="product_id">
                                                @endif
                                                
                                                @if($booking_count!=0)
                                                <div class="form-group submit">
                                                    <button class="ps-btn" id="submit_review23">Submit Review</button>
                                                </div>
                                                @endif
                                            </div> 
<!-- review end -->                      </form>

                                        </div>
                                    </div>
                                    <br>
                                    @php($rate=DB::table('customer_reviews')->join('users','users.id','=','customer_reviews.customer_id')->where('customer_reviews.product_id',$product_id)->orderBy('customer_reviews.rating','desc')->limit(10)->get())
                                  @foreach($rate as $rate)
                                  @php($no=$rate->rating)
                                      {{$no}} &nbsp;
                                     @for($p=0;$p<$no;$p++)
                                     <i class="fa fa-star" style="color:#fcb800;font-size:20px"></i>
                                     @endfor 
                                      <br>

                                  <b>Name&nbsp;&nbsp;&nbsp;:</b> {{$rate->name}}<br>
                                 <b>Review :</b> {{$rate->details}}<br><br>
                                  @endforeach 
                                </div>
                                <div class="ps-tab" id="tab-5">
                                   

  <p style="font-size: 25px;"><a href=""><strong>Features</strong></a></p>
                            <ol class="ps-list--01">
                            @php($feature=DB::table('features')->where('product_id',$product_id)->get())
                            @foreach($feature as $a=>$feature)
                                <li style="font-size: 15px;">{{$feature->feature_name}} </li>
                                
                                @endforeach
                            </ol>



                                </div>
                                <div class="ps-tab active" id="tab-6">
                               
                          hgfgjghj
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-page__right">
                    <aside class="widget widget_product widget_features">
                        <p><i class="icon-network"></i> Shipping worldwide</p>
                        <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
                        <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
                        <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
                    </aside>
                    <aside class="widget widget_sell-on-site">
                        <p><i class="icon-store"></i> Sell on Bansal Group?<a target="_blank" href="/vendor_register"> Register Now !</a></p>
                    </aside>
                    <aside class="widget widget_ads"><a href="#"><img src="img\ads\product-ads.png" alt=""></a></aside>
                    <aside class="widget widget_same-brand">
                        <h3>Most Ratted Product</h3>
                        <div class="widget__content">
                        @php($pro=DB::table('products')
                        ->join('users','users.id','=','products.vendor_id')
                        ->where('products.active_status','YES')
                         ->where('products.vendor_active_status','YES')
                        ->orderby('review','desc')
                        ->limit(1)
                        ->get())
                        @foreach($pro as $pro)
                        @php($p_id=$pro->product_id)
                            <div class="ps-product">
                            @php($pro_img=DB::table('product_images')->where('product_id',$p_id)->limit(1)->get())
                        @foreach($pro_img as $pro_img)
                            
                            
                        <div class="ps-product__thumbnail"><a href="product_details?id={{$p_id}}"><img src="product_image/{{$pro_img->product_image}}" alt=""></a>

                            @endforeach       <div class="ps-product__badge">In Stok</div>
                                    <ul class="ps-product__actions">
                                    <li><a href=" /product_details?id={{$p_id}}" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="Add to Whishlist" onclick="wishlist({{$p_id}});"><i class="icon-heart"></i></a></li>
                                  
                                    <li><a data-toggle="tooltip" data-placement="top" title="Add to Cart"  onclick="cart({{$p_id}});"><i class="icon-bag2"></i></a></li>
                           
                                      </ul>
                                </div>
                                <div class="ps-product_container"><a class="ps-product_vendor" href="#">{{$pro->companey_name}}</a>
                                    <div class="ps-product_content"><a class="ps-product_title" href="product_details?id={{$p_id}}">{{$pro->product_name}}</a>
                                        <div class="ps-product__rating">
                                        @php($a=(int)$pro->review)
                                                    
                                                    @for($i=0;$i<$a;$i++)
                                                             <i class="fa fa-star" style="color:#fcb800;"></i>
                                                    @endfor
                                                  
                                                    @if((is_float($pro->review)==0))
                                                        @php($t=5)
                                                        @else
                                                        @if(($pro->review!=0))
                                                        <i class="fa fa-star-half-o" style="color:#fcb800;"></i>
                                                        
                                                        @php($t=5-1)
                                                        @else
                                                        @php($t=5)
                                                        @endif

                                                    @endif

                                                    @for($i=0;$i<$t-$a;$i++)
                                                          <i class="fa fa-star-o" style="color:#fcb800;"></i>
                                                    @endfor
                                        
                                        
                                        
                                        <span>{{$pro->total_review}}</span>
                                        </div>
                                        @php($pro_price=DB::table('product_prices')->where('product_id',$p_id)->first())
                     
                                        <p class="ps-product__price sale">₹ {{$pro_price->product_price}} <del>₹ {{$pro->mrp}} </del></p>
                                </div>
                                <div class="ps-product_content hover"><a class="ps-product_title" href="product_details?id={{$p_id}}">{{$pro->product_name}}</a>
                                    <p class="ps-product__price sale">₹ {{$pro_price->product_price}}  <del>₹ {{$pro->mrp}} </del></p>
                                </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </aside>
                </div>
            </div>
            
            <div class="ps-section--default">
                <div class="ps-section__header">
                    <h3>Related products</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                       @foreach($for_related_product as $for_related_product)
                        <div class="ps-product">
                        @php($index_product_id=$for_related_product->product_id)
                            @php($from_cat_image=DB::table('product_images')->where('product_id',$index_product_id)->first())
                           
                            <div class="ps-product__thumbnail"><a href="/product_details?id={{$index_product_id}}">
                            
                            <img src="..\product_image\{{$from_cat_image->product_image}}" alt=""></a>
                               
                            <ul class="ps-product__actions">
                                     <li><a href=" /product_details?id={{$index_product_id}}" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a data-toggle="tooltip" data-placement="top" title="Add to Whishlist" onclick="wishlist({{$index_product_id}});"><i class="icon-heart"></i></a></li>
                                  
                                    <li><a data-toggle="tooltip" data-placement="top" title="Add to Cart"  onclick="cart({{$index_product_id}});"><i class="icon-bag2"></i></a></li>
                                  
                                </ul>
                            </div>
                            <div class="ps-product_container"><a class="ps-product_vendor" href="#">{{$for_related_product->brand}}</a>
                                <div class="ps-product_content"><a class="ps-product_title" href="/product_details?id={{$index_product_id}}">{{$for_related_product->product_name}}</a>
                                    <div class="ps-product__rating">
                                    @php($a=(int)$for_related_product->review)
                                                    
                                                    @for($i=0;$i<$a;$i++)
                                                             <i class="fa fa-star" style="color:#fcb800;"></i>
                                                    @endfor
                                                  
                                                    @if((is_float($for_related_product->review)==0))
                                                        @php($t=5)
                                                        @else
                                                        @if(($for_related_product->review!=0))
                                                        <i class="fa fa-star-half-o" style="color:#fcb800;"></i>
                                                        
                                                        @php($t=5-1)
                                                        @else
                                                        @php($t=5)
                                                        @endif

                                                    @endif

                                                    @for($i=0;$i<$t-$a;$i++)
                                                          <i class="fa fa-star-o" style="color:#fcb800;"></i>
                                                    @endfor
                                        
                                        
                                        
                                        <span>{{$for_related_product->review}}</span>
                                    </div>
                                    @php($for_price=DB::table('product_prices')->where('product_id',$index_product_id)->first())
                                    <p class="ps-product__price sale">&#8377;{{$for_price->product_price}}</del></p>
                                </div>
                                <div class="ps-product_content hover"><a class="ps-product_title" href="/product_details?id={{$index_product_id}}">{{$for_related_product->product_name}}</a>
                                    <p class="ps-product__price sale">&#8377;{{$for_price->product_price}}</del></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
             

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
</script>

<script>
$(document).ready(function(){


    var product_id=$("#product_id").val();
    
    

var token=$("#_token").val();


$("#submit_review").click(function(){
  //  alert();
var token=$("#_token").val();

var review_value=$("#review_value").val();

var review_details=$("#review_details").val();
var book_muti_item_id=$("#book_muti_item_id").val();

var product_id=$("#product_id").val();
$.ajax({

url:'review_add',

type:'POST',

data:{review_value:review_value,review_details:review_details,product_id:product_id,_token:token,book_muti_item_id:book_muti_item_id},

success:function(response)
{
   // alert('1');
    $("#view_review").html();
}


});
});


    var product_id=$("#product_id").val();
    toggle(product_id);
  




   $(".up").click(function(){

       var value1=$("#value").val();

       var value2=Number(value1)+1;
       
       
       $('.gst1').val(value2);
       
  });



  $(".down").click(function(){

       var value1=$("#value").val();
       var value2=Number(value1)-1;
       if(value2<=1)
       {
       $('.gst1').val(1);
       }
       else{
        $('.gst1').val(value2);

       }
  });



$('#ok').click(function(){
    //alert("a");

    var qty=$("#value").val();
    var user_id=$("#user_id").val();
    var product_id=$("#product_id").val();
    var size = $("input[name='size']:checked").val()
  
    var token=$("#_token").val();
     
   
$.ajax({

    url:'cart_aj',

    type:'POST',

    data:{qty:qty,_token:token,user_id:user_id,product_id:product_id,size:size},
   
  success:function(response)
    {
    
   
   cart_ajax();
   toggle(product_id);
   mdtoast('Add to cart sucessfully.', { 
  interaction: true, 
  actionText: 'View Cart',
  
  action: function(){
    this.hide(); 
    window.location.href="shopping_cart"
  },
 

});
    }
   

    });
});




$('#ok1').click(function(){

  //alert("b");

    var qty=$("#value").val();
    var user_id=$("#user_id").val();
    var product_id=$("#product_id").val();
    var size = $("input[name='size']:checked").val()
    var token=$("#_token").val();
    
   
$.ajax({

    url:'cart_aj',

    type:'POST',

    data:{qty:qty,_token:token,user_id:user_id,product_id:product_id,size:size},
   
  success:function(response)
    {
    
   
   cart_ajax();
   toggle(product_id);
   mdtoast('Add to cart sucessfully.', { 
  interaction: true, 
  actionText: 'View Cart',
  
  action: function(){
    this.hide(); 
    window.location.href="shopping_cart"
  },
 

});
    }
   

    });
});


$('#ok2').click(function(){

//alert("b");

  var qty=$("#value").val();
  var user_id=$("#user_id").val();
  var product_id=$("#product_id").val();
  var size = $("input[name='size']:checked").val()
  var token=$("#_token").val();
  
 
$.ajax({

  url:'cart_aj',

  type:'POST',

  data:{qty:qty,_token:token,user_id:user_id,product_id:product_id,size:size},
 
success:function(response)
  {
  
 
 cart_ajax();
 toggle(product_id);
 mdtoast('Add to cart sucessfully.', { 
interaction: true, 
actionText: 'View Cart',

action: function(){
  this.hide(); 
  window.location.href="shopping_cart"
},


});
  }
 

  });
});




$("#pincheck").click(function(){

    var pin=$("#pin").val();

    var product_id=$("#product_id").val();
  //alert(pin.length);
if(pin.length==6){
$.ajax({

url:'pinckeck',

type:'POST',

data:{pin:pin,_token:token,product_id:product_id},

success:function(response)
{


if(response==1){
    swal("Delivary Unavailable!", "Please try another pincode", "warning");
  //  $("#pinstatus").css("color", "red").css("weight", "bold").html("Not available in this location");
}else if(response==2){
    swal("Aww yiss!", "Delivary available in your pincode!", "success");
  //  $("#pinstatus").css("color", "green").css("weight", "bold").html("Available in this location");
}
}


});
}else{
   // swal('Not a valid Pincode');
    swal("Invalid Pincode!", "Please check your pincode!", "error");
   // $("#pinstatus").css("color", "red","weight", "bold").html("Not a valid Pincode");
}
});


});
</script>

<script>
function booking(id){

 //alert();
   
  var qty=$("#value").val();  
  var size = $("input[name='size']:checked").val()
  var token=$("#_token").val();
 
 
 

$.ajax({

 url:'/goto_checkout',

 type:'POST',

 data:{_token:token,product_id:id,qty:qty,size:size},


success:function(response)
 {
    
     

window.location.href='checkout?id='+id+'';


 }

 });
}


</script>


@endsection