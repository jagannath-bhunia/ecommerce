@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<!--section start-->
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{ URL::asset('user/img/banner/banner-9.jpg')}})">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2 style="color:black">login / register</h2>
                        <ul>
                            <li>
                                <a href="{{route('user.index')}}" style="color:black">home</a>
                            </li>
                            <li style="color:black">login register</li>
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
            <div class="login-register-area ptb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4> login </h4>
                                    </a>
                                    <a data-toggle="tab" href="#lg2">
                                        <h4> register </h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="{{route('user.userlogin')}}" method="post">
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
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="{{route('user.userregister')}}" method="post">
                                                @csrf
                                                    <input type="text" name="name" placeholder="Username" value="{{old('name')}}">
                                                    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

                                                    <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}

                                                    <input type="number" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                                    {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}

                                                    <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
                                                    {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                                                    <div class="button-box">
                                                        <button type="submit" class="btn-style cr-btn"><span>Register</span></button>
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
height: 90vh;
width: 100%;
}
</style>
<!--Section ends-->
@endsection