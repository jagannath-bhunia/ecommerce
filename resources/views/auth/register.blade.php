@extends("user.layout.userlayout")
@section('title','dashboard')

@section("body")

<!--section start-->
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{ URL::asset('user/img/banner/banner-9.jpg')}})">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2 > Register</h2>
                        
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
                                    
                                        <h2> Register </h2>
                                   
                                </div>
                                <div class="tab-content">
                                   
                                    
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="{{ route('register') }}" method="post">
                                                @csrf
                                                    <input id ="name" type="text" name="name" placeholder="Username" value="{{old('name')}}">
                                                    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

                                                    <input id="email" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}

                                                    

                                                    <input id="password" type="password" name="password" placeholder="Password" value="{{old('password')}}">
                                                    {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}

                                                    <input id="password-confirm" type="password" class="form-control" placeholder=" confrom Password" name="password_confirmation" required autocomplete="new-password">
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
<!--Section ends-->
<style>

.breadcrumb-area{
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
height: 70vh;
width: 100%;
}
</style>
@endsection