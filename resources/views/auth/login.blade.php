@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<!--section start-->
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{ URL::asset('user/img/banner/banner-9.jpg')}})">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Login</h2>
           
        </div>
    </div>
</div>

<div class="login-register-area ptb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                       
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-form">
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
                                    <form action="{{ route('login') }}" method="post">
                                    @csrf
                                        <input type="text" name="email" placeholder="Email">
                                        {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}

                                        <input type="password" name="password" placeholder="Password">
                                        {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}

                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit" class="btn-style cr-btn"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
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
height: 70vh;
width: 100%;
}
</style>
<!--Section ends-->
@endsection