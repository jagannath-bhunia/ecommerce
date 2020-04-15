


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="bigboost">
    <meta name="keywords" content="bigboost">
    <meta name="author" content="bigboost">
    
    <meta name="csrf-token" content="2Zxb2h7mQoImvUJhZzAgxxoL9N5CcxW88wSCHibk">

    <link rel="icon" href="{{asset('user/images/10.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{URL::asset('user/images/10.png')}}" type="image/x-icon"/>
    <title>DrishtiKart</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/fontawesome.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/flipclock.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/slick-theme.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/bootstrap.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/themify-icons.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" id="color" type="text/css" href="{{URL::asset('user/css/color5.css')}}">
    <style>

@media  only screen and (max-width: 700px) {


    #asa{display: none;}
  


}




.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
</head>
<body>

    <!-- loader start -->
 <div class="loader-wrapper">
    <div class=" bar">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    </div>
</div>
    <!-- loader end -->
    <input type="hidden" name="_token" id="_token" value="2Zxb2h7mQoImvUJhZzAgxxoL9N5CcxW88wSCHibk"/>	
        <input type="hidden" id="user_id" value="0">
        <div id="ajax_loader" data-notify="container" class="col-xs-11 col-sm-6 alert alert-info animated fadeInDown" role="alert" data-notify-position="top-right" style="display: none; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px;width:auto;font-size: large;"></button><img src="../user_assets/images/ajaxlodar.gif" style="width:20px"></span> <span data-notify="title">Wait!</span> <span data-notify="message">don't refresh the page and can't press back button.</span>
        <div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div><a href="#" target="_blank" data-notify="url"></a></div>
				
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

<!--modal popup end-->


<!-- Add to cart bar -->
<span id="cart-item"></span>
<!-- Add to cart bar end-->


<!-- Add to wishlist bar -->
<span id="wish-item"></span>
<!-- Add to wishlist bar end-->


<!-- My account bar -->
<div id="myAccount" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form" method="POST" action="https://drishtikart.com/login">
            <input type="hidden" name="_token" value="2Zxb2h7mQoImvUJhZzAgxxoL9N5CcxW88wSCHibk">               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control " name="email" value="" id="email"  placeholder="Email" required autocomplete="email" autofocus>
              
                              </div>
               <div class="form-group">
                   <label for="review">Password</label>
                   <input type="password" class="form-control " id="password" placeholder="Enter your password" name="password" required autocomplete="current-password">
              
                             </div>
   
                <div class="form-check" style="padding-bottom: 10px;">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" >
   
                                       <label class="form-check-label" for="remember">
                                           Remember Me
                                       </label>
                                   </div>
            
   
                 <button type="submit" class="btn btn-solid btn-solid-sm btn-block">
                                       Login
                                   </button>
   
                                   <div class="form-group" style="padding-top:10px">
                             
                                      <a href="https://drishtikart.com/redirect" class="btn btn-solid btn-solid-sm btn-block">Login with Facebook</a>
                                   
                                </div>
   
               <font class="forget-class">                                        <a class="btn btn-link" href="https://drishtikart.com/password/reset">
                                           Forgot Your Password?
                                       </a>
                                                                      
                            </form>       
                                   <a href="register" class="btn btn-link">new to store? Signup now</a></font>
           
    </div>
</div>
<!-- Add to wishlist bar end-->


<!-- Add to cart modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg addtocart">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="media">
                                    <a href="#">
                                        <img class="img-fluid  pro-img" src="../user_assets/images/cosmetic/4.jpg" alt="">
                                    </a>
                                    <div class="media-body align-self-center text-center">
                                        <a href="#">
                                            <h6>
                                                <i class="fa fa-check"></i>Item
                                                <span>men full sleeves</span>
                                                <span> successfully added to your Cart -</span>
                                                <span>blue,</span>
                                                <span>XS</span>
                                            </h6>
                                        </a>
                                        <div class="buttons">
                                            <a href="cart" class="view-cart btn btn-solid">Your cart</a>
                                            <a href="check_out" class="checkout btn btn-solid">Check out</a>
                                            <a href="#" data-dismiss="modal" class="continue btn btn-solid">Continue shopping</a>
                                        </div>

                                        <div class="upsell_payment">
                                            <img src="../user_assets/images/payment_cart.png" class="img-fluid " alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-section">
                                    <div class="col-12 product-upsell text-center">
                                        <h4>Customers who bought this item also.</h4>
                                    </div>
                                    <div class="row" id="upsell_product">
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html">
                                                        <img src="../user_assets/images/cosmetic/1.jpg" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html">
                                                        <img src="../user_assets/images/cosmetic/6.jpg" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html">
                                                        <img src="../user_assets/images/cosmetic/13.jpg" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html#">
                                                        <img src="../user_assets/images/cosmetic/19.jpg" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add to cart modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="../user_assets/images/cosmetic/14.jpg" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Women Pink Shirt</h2>
                            <h3>$32.96</h3>
                            <div class="border-product">
                                <h6 class="product-title">product details:</h6>
                                <p>this brand is a t-shirt led value brand for men, women and kids. Our range consists of basic and updated basic knit apparel. We offer both singles and packs with the right blend of quality, style and value aimed to delight our customers.</p>
                            </div>
                            <div class="product-description border-product">
                                <h6 class="product-title">color:</h6>
                                <ul class="color-variant">
                                    <li class="light-purple active"></li>
                                    <li class="theme-blue"></li>
                                    <li class="theme-color"></li>
                                </ul>
                                <h6 class="product-title">size:</h6>
                                <div class="size-box">
                                    <ul class="size-box">
                                        <li class="active">xs</li>
                                        <li>s</li>
                                        <li>m</li>
                                        <li>l</li>
                                        <li>xl</li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity:</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="cart" class="btn btn-solid bg-gradient">add to cart</a>
                                <a href="cart" class="btn btn-solid bg-gradient">view detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- theme setting -->


<!-- theme setting -->


<!-- latest jquery-->
<script src="{{URL::asset('user/js/jquery-3.3.1.min.js')}}" ></script>

<!-- menu js-->
<script src="{{URL::asset('user/js/menu.js')}}"></script>

<!-- timer js-->
<script src="{{URL::asset('user/js/flipclock.js')}}"></script>

<!-- popper js-->
<script src="{{URL::asset('user/js/popper.min.js')}}" ></script>

<!-- slick js-->
<script  src="{{URL::asset('user/js/slick.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{URL::asset('user/js/bootstrap.js')}}" ></script>


<!-- Bootstrap Notification js-->
<script src="{{URL::asset('user/js/bootstrap-notify.min.js')}}"></script>

<!-- Theme js-->
<script src="{{URL::asset('user/js/script.js')}}" ></script>

<script>
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
</script>
<script src="{{URL::asset('user/js/jquery.elevatezoom.js')}}"></script>
<!-- modal js-->
<script src="{{URL::asset('user/js/modal.j')}}s" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<!--<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>-->
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    
$(document).ready(function() {
wallet();
cart_ajax();
wishlist_ajax();

});

</script>
<script >

function cart_ajax(){
//   alert();
   var token = $("#_token").val();
$.ajax({

    url:'cart_ajax',

    type:'POST',

    data:{_token:token},
   
  success:function(response)
    {

       
        var abc=response.split('malay');
     

     $("#cart_count").html(abc[0]);
        $("#cart-item").html(abc[1]);
   
  
    }

    });
}
function wishlist_ajax(){
//   alert();
   var token = $("#_token").val();
$.ajax({

    url:'wishlist_ajax',

    type:'POST',

    data:{_token:token},
   
  success:function(response)
    {
 //alert(response);
   var abc1=response.split('malay1');
     

     $("#wish_count").html(abc1[0]);
        $("#wish-item").html(abc1[1]);
       
  
    }

    });
}



    function cart(id,color_id,power,image,size_id,qty){
        
       // alert(id);
        var user=$("#user_id").val();
      //  alert(user);
       if(user!=0){
   //   var qty=$("#qty").val();
          // var color_id=$("#color_id").val();
      // alert();
       var token = $("#_token").val();
    $.ajax({
    
        url:'addtocart_ajax',
    
        type:'POST',
    
        data:{_token:token,product_id:id,qty:qty,color_id:color_id,power:power,image:image,size_id:size_id},
       
      success:function(response)
        {
       //  alert(response);
     
     
     
       if(response==2){
           alert('Already Exits');
       }else if(response==5){
           alert('Atfirst Clear Your Cart');
       }else{
        cart_ajax();
        cart_button();
       }
          }   
     });
      
      
    }else{


        alert('Please Login');

    }
       
    }
    function remove_cart(id){
        //alert(id);
       
       var token = $("#_token").val();
     //  alert();
    $.ajax({
    
        url:'removetocart_ajax',
    
        type:'POST',
    
        data:{_token:token,product_id:id},
       
      success:function(response)
        {

           
            cart_ajax();
            //toggle(id);
            show_cart();

            
            cart_button();
           

           
        }   
     });      
    }
    function wishlist(id,color_id,power,image,size_id,qty){
      //  alert(id);
        var user=$("#user_id").val();
       if(user!=0){
    //   alert();
       var token = $("#_token").val();
    $.ajax({
    
        url:'addtowishlist_ajax',
    
    
        type:'POST',
    
        data:{_token:token,product_id:id,color_id:color_id,power:power,image:image,size_id:size_id,qty:qty},
       
      success:function(response)
        {
         //alert(response);
       if(response==2){
           alert('Already Exits');
       }else{
        cart_ajax();
        wishlist_ajax();
        wish_button();
       }

          }   

     });
      

      
    }else{
        alert('Please Login');
    }
       
    }
    function remove_wishlist(id){
      //  alert(id);
       
       var token = $("#_token").val();
     //  alert();
    $.ajax({
    
        url:'removetowishlist_ajax',
        type:'POST',
        data:{_token:token,product_id:id},
       
      success:function(response)
        {
           //alert(response);
            cart_ajax();
          //wishlist_table();
            wish_button();
            wishlist_ajax();
        }   
     });
      
      
    
       
    }
    </script>




    <script defer>
function wallet(){

  var token=$("#_token").val();
   
$.ajax({
  
 url:'/create_wallet',

 type:'POST',

 data:{_token:token},


success:function(response)
 {
   

 }

 });
}


</script>


<script>
    $( document ).ready(function() {
       // alert();
        for (let i=0; i<10; i++) { 
            task(i); 
        } 
            
        function task(i) { 
        setTimeout(function() { 
            $('.slick-next').click();
        }, 4000 * i); 
        } 
});
   

</script>
