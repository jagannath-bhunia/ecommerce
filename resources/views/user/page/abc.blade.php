@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<!DOCTYPE html>
<html>
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <title>cart</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
</head>
<body>
 

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2 style="color:black">Cart page</h2>
                        <ul>
                            <li>
                                <a href="#"style="color:black" >home</a>
                            </li>
                            <li style="color:black" >Cart page</li>
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
<div class="container page">
<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
 
        <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>
 
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{asset('uploads/item/' . $details['image']  )}}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['item_id'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>

            @endforeach
        @endif
 
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <!-- <td class=" text-center"><strong>Total {{ $total }}</strong></td> -->
        </tr>
        <tr>
            <td ></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>


        
    </table>

   
    <div class="row">
        <div class="col-md-12">
            <div class="cart-shiping-update">
                <div class="cart-shipping">
                    <a class="btn-style cr-btn" href="#">
                        <span>continue shopping</span>
                    </a>
                </div>
                <div class="update-checkout-cart">
                    <div class="">
                        <a class="btn-style cr-btn" href="{{route('user.checkout')}}">
                            <span>checkout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
 
</div>
 
<script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        //alert(responce);
                         window.location.reload();
                    }
                });
            }
        });
 
    </script>
 <style>
    .main-section{
        background-color: #F8F8F8;
    }
    .dropdown{
        float:right;
        padding-right: 30px;
    }
    .btn{
        border:0px;
        margin:10px 0px;
        box-shadow:none !important;
    }
    .dropdown .dropdown-menu{
        padding:20px;
        top:30px !important;
        width:350px !important;
        left:-110px !important;
        box-shadow:0px 5px 30px black;
    }
    .total-header-section{
        border-bottom:1px solid #d2d2d2;
    }
    .total-section p{
        margin-bottom:20px;
    }
    .cart-detail{
        padding:15px 0px;
    }
    .cart-detail-img img{
        width:100%;
        height:100%;
        padding-left:15px;
    }
    .cart-detail-product p{
        margin:0px;
        color:#000;
        font-weight:500;
    }
    .cart-detail .price{
        font-size:12px;
        margin-right:10px;
        font-weight:500;
    }
    .cart-detail .count{
        color:#C2C2DC;
    }
    .checkout{
        border-top:1px solid #d2d2d2;
        padding-top: 15px;
    }
    .checkout .btn-primary{
        border-radius:50px;
        height:50px;
    }
    .dropdown-menu:before{
        content: " ";
        position:absolute;
        top:-20px;
        right:50px;
        border:10px solid transparent;
        border-bottom-color:#fff;
    }
    
    .thumbnail {
        position: relative;
        padding: 0px;
        margin-bottom: 20px;
    }
    
    .thumbnail img {
        width: 100%;
    }
    
    .thumbnail .caption{
        margin: 7px;
    }
    
    .page {
        margin-top: 50px;
    }
    
    .btn-holder{
        text-align: center;
    }
    
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }
    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }
    
        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }
    
        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }
    
    
    
        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}
    
    }
 </style>
</body>
</html>




@endsection