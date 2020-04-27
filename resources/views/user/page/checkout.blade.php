@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2 style="color:black">checkout page</h2>
            <ul>
                <li>
                    <a href="#" style="color:black">home</a>
                </li>
                <li style="color:black">checkout page</li>
            </ul>
        </div>
    </div>
</div>

 <!-- checkout-area start -->
 <div class="checkout-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon-accordion">
                                <!-- ACCORDION START -->
                                <!-- <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                <div id="checkout-login" class="coupon-content">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                        <form action="#">
                                            <p class="form-row-first">
                                                <label>Username or email <span class="required">*</span></label>
                                                <input type="text" />
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password  <span class="required">*</span></label>
                                                <input type="text" />
                                            </p>
                                            <p class="form-row">					
                                                <input type="submit" value="Login" />
                                                <label>
                                                    <input type="checkbox" />
                                                     Remember me 
                                                </label>
                                            </p>
                                            <p class="lost-password">
                                                <a href="#">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div> -->
                                <!-- ACCORDION END -->	
                                <!-- ACCORDION START -->
                                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                                <div id="checkout_coupon" class="coupon-checkout-content">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" placeholder="Coupon code" />
                                                <input type="submit" value="Apply Coupon" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->						
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            
                            <form action="{{ route('user.book') }}" method="post">
                                @csrf
                                <div class="checkbox-form">						
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select id="country" name="country">
                                                  <option name="country" id="country" value="India">India</option>
                                                  {!! $errors->first('country', '<small class="text-danger">:message</small>') !!}

                                                  <!-- <option value="saab">USA</option>
                                                  <option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option> -->
                                                </select> 										
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>										
                                                <input type="text" placeholder="Enter first name" name="f_name"  id="f_name"/>
                                                {!! $errors->first('f_name', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>										
                                                <input type="text" placeholder="Enter last name" name="l_name" id="l_name"/>
                                                {!! $errors->first('l_name', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>  
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" name="address" id="address"/>
                                                {!! $errors->first('address', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Enter Town/City" name="city" id="city" />
                                                {!! $errors->first('city', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State <span class="required">*</span></label>										
                                                <input type="text" placeholder="Enter state" name="state" id ="state" />
                                                {!! $errors->first('state', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>										
                                                <input type="text" placeholder="Enter zip code" name="zip" id="zip" />
                                                {!! $errors->first('zip', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>										
                                                <input type="email" placeholder="Enter email" name="email" id="email" />
                                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>										
                                                <input type="text" placeholder="Enter phone number" name="phone" id="phone" />
                                                {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <div class="checkout-form-list create-acc">	
                                                <input id="cbox" type="checkbox" />
                                                <label>Create an account?</label>
                                            </div>
                                            <div id="cbox_info" class="checkout-form-list create-account">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password  <span class="required">*</span></label>
                                                <input type="password" placeholder="password" />	
                                            </div>
                                        </div>								 -->
                                    </div>
                                    <!-- <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input id="ship-box" type="checkbox" />
                                            </h3>
                                        </div>
                                        <div id="ship-box-info" class="row">
                                            <div class="col-md-12">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                      <option value="volvo">bangladesh</option>
                                                      <option value="saab">Algeria</option>
                                                      <option value="mercedes">Afghanistan</option>
                                                      <option value="audi">Ghana</option>
                                                      <option value="audi2">Albania</option>
                                                      <option value="audi3">Bahrain</option>
                                                      <option value="audi4">Colombia</option>
                                                      <option value="audi5">Dominican Republic</option>
                                                    </select> 										
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>										
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>										
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">									
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>										
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>										
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>										
                                                    <input type="email" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Phone  <span class="required">*</span></label>										
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>								
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list mrg-nn">
                                                <label>Order Notes</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                            </div>									
                                        </div>
                                    </div>													 -->
                                </div>
                            
                        </div>	
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>							
                                        </thead>
                                        <tbody>
                                        <?php $total = 0 ?>
                                        @foreach($item as  $details)
                                        <?php $total += $details->price * $details->qty ?>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                {{ $details->name }} <strong class="product-quantity"> ×{{ $details->qty }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">${{ $details->price * $details->qty }}</span>
                                                </td>
                                            </tr>
                                            <input type="hidden" id="item_id" value="{{$details->item_id}}">
                                            <input type="hidden" id="_token" value="<?php echo csrf_token();?>">
                                            <input type="hidden" id="qty" value="{{$details->qty}}">

                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <!-- <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">£215.00</span></td>
                                            </tr> -->
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount" name="total" id="total">${{$total}}</span></strong>
                                                </td>
                                            </tr>								
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method mt-40">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="faq">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                                </div>
                                                <div id="payment-1" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                                </div>
                                                <div id="payment-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                                </div>
                                                <div id="payment-3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Payment <span class="required">*</span></label>
                                                <select id="payment" name="payment">
                                                  <option name="payment" name="payment" id="payment" value="cash">cash</option>
                                                   <option name="payment" name="payment" id="payment" value="online">online</option>
                                                  <!--<option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option> -->
                                                </select> 										
                                            </div>
                                        </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order" />
                                        </div>								
                                    </div>
                                </div>
                            </div>
                        </div>
                 </form>
                    </div>
                </div>
            </div>
            <!-- checkout-area end -->

<!-- 
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>
<script>
  
    function book(){
        //alert(id);
        var item_id=$("#item_id").val();
        var country=$("#country").val();
        var f_name=$("#f_name").val();
        var l_name=$("#l_name").val();
        var address=$("#address").val();
        var city=$("#city").val();
        var state=$("#state").val();
        var zip=$("#zip").val();
        var email=$("#email").val();
        var phone=$("#phone").val();
        var payment=$("#payment").val();
        var token=$("#_token").val();
        var total={{$total}};
        var qty=$("#qty").val();

        var url="{{ route('user.book') }}";
        
        $.ajax({
            url:url,
            type:'POST',
            data:{country:country,_token:token,item_id:item_id,f_name:f_name,l_name:l_name,address:address,city:city,state:state,zip:zip,
                email:email,phone:phone,payment:payment,total:total,qty:qty},
        
            success:function(response)
            {
                
                
                // abc();
                window.location.href='https://securegw-stage.paytm.in/theia/processTransaction';
            }
        });

    }

</script> -->

@endsection