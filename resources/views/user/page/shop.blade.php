@extends("user.layout.userlayout")
@section('title','shop')

@section("body")

<div class="breadcrumb-area pt-255 pb-170" style="background-image:  url({{ URL::asset('user/img/banner/banner-9.jpg')}})">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2 >Shop Page</h2>
                        <ul >
                            <li >
                                <a href="{{url('/home')}}" >home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <div class="col-lg-3">
                            <div class="product-sidebar-area pr-60">
                                <div class="sidebar-widget pb-55">
                                    <h3 class="sidebar-widget">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Products...">
                                            <button><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">by categories</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Jewelry</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-55">
                                    <h3 class="sidebar-widget">by price</h3>
                                    <div class="price_filter mr-60">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <label>price : </label>
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                            <button type="button">Filter</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-55">
                                    <h3 class="sidebar-widget">by color</h3>
                                    <div class="product-color">
                                        <ul>
                                            <li class="blue">b</li>
                                            <li class="yellow">y</li>
                                            <li class="gray">g</li>
                                            <li class="puce">pu</li>
                                            <li class="black">b</li>
                                            <li class="pink">p</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-45">
                                    <h3 class="sidebar-widget">product tags</h3>
                                    <div class="product-tags">
                                        <ul>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Bag</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Tie</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Dress</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-55">
                                    <h3 class="sidebar-widget">compare</h3>
                                    <div class="product-compare">
                                        <ul>
                                            <li><a href="#">Gloriori GSX 250 R <span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                                            <li><a href="#">Klager GSX 250 R<span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                                            <li><a href="#">Maxclon ZPE 54 <span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="compare-text-btn">
                                        <div class="compare-text">
                                            <h5>Clear All</h5>
                                        </div>
                                        <div class="compare-btn">
                                            <a href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget">
                                    <h3 class="sidebar-widget">best seller</h3>
                                    <div class="best-seller">
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="#"><img src="assets/img/product/product-12.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="#">Minimal White Shoes</a></h3>
                                                <span>$39.9</span>
                                            </div>
                                        </div>
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="#"><img src="assets/img/product/product-13.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="#">Minimal White Shoes</a></h3>
                                                <span>$39.9</span>
                                            </div>
                                        </div>
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="#"><img src="assets/img/product/product-14.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="#">Minimal White Shoes</a></h3>
                                                <span>$39.9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <!-- <div class="shop-topbar-wrapper">
                                <div class="grid-list-options">
                                    <ul class="view-mode">
                                        <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
                                        <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-sorting">
                                    <div class="shop-product-sorting nav">
                                        <a class="active" data-toggle="tab" href="#new-product">NEW BIKES </a>
                                        <a  data-toggle="tab" href="#use-product"> USED BIKES </a>
                                        <a data-toggle="tab" href="#accessory-product">ACCESSORIES</a>
                                    </div>
                                    <div class="sorting sorting-bg-1">
                                        <form>
                                            <select class="select">
                                                <option value="">Default softing </option>
                                                <option value="">Sort by news</option>
                                                <option value="">Sort by price</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <div class="grid-list-product-wrapper tab-content">
                                <div id="new-product" class="product-grid product-view tab-pane active">
                                    <div class="row">
                                    @foreach($item as $items)
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">

                                        
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="{{route('user.productdetails', $items->id)}}">
                                                        <img src="{{asset('uploads/item/' . $items->image  )}}" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>{{$items->about}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" onclick="add({{$items->id}})">
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
                                                            <h4><a href="{{route('user.productdetails', $items->id)}}">{{$items->name}}</a></h4>
                                                            <span>{{$items->about}}</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>${{$items->price}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">{{$items->name}}</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>${{$items->price}}</span>
                                                    </div>
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="{{ url('add-to-cart/'.$items->id) }}"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div> -->
                                                </div>
                                            </div>

                                            <input type="hidden" id="_token" value="<?php echo csrf_token();?>">

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                               
                            </div>
                            <div class="paginations text-center mt-20">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<style>

.breadcrumb-area{
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
height: 90vh;
width: 100%;
}
</style>
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