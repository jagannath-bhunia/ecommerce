@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
             <div class="col-lg-6">
                <h3 class="title pt-0">create account</h3>
                <div class="theme-card">
                      <form method="POST" action="{{URL('/register')}}" class="theme-form">
                        <!-- <input type="hidden" name="_token" value="2Zxb2h7mQoImvUJhZzAgxxoL9N5CcxW88wSCHibk">       -->
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="email">Name</label>
                                <input type="text" class="form-control " id="name"  name="name" value="" placeholder="Your Name" required autocomplete="name" autofocus>  
                                {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control " placeholder="Enter Your Email" name="email" value="" required autocomplete="email">
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}

                            </div>
                            <div class="col-md-6">
                                <label for="review">Phone Number</label>
                                <input id="phone" type="number" required class="form-control " name="phone" value="" autocomplete="p_number" autofocus placeholder="Enter your phone number">          
                            {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}
    
                        </div>
                       
                            <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">Password</label>
                            
                            <input id="password" type="password" placeholder="Enter your password" class="form-control " name="password" required autocomplete="new-password">
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}

                            </div>
                           

                            <input type="hidden" name="role" value="1">
                              <div class="form-check col-md-12" style="padding-left:5%">
                                    <input class="form-check-input" type="checkbox" required id="tra">

                                    <label class="form-check-label" for="tra">
                                    You agree to LANSDEAL'S <a href="/terms-and-conditions">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>
                                    </label>
                                    <br><br><br>
                                </div>
                    
                            <button type="submit" class="btn btn-solid" >
                                    Register
                                </button>
                        
                           
                            </div>
                    </form>
                </div>
            </div>
             <div class="col-lg-3">
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection