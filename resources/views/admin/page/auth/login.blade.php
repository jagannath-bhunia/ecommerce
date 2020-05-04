@extends("admin.layout.loginlayout")
@section('title','login')
@section("body")              
<div class="login-content">
    <h2>LOGIN</h2>
    @include("admin.common.message")
    <div class="login-form">
        <form action="{{url('login')}}" method="post">
        {{csrf_field()}}
            <div class="form-group">
                <label>Email Address</label>
                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
            </div>
            <div class="login-checkbox">
                
                <label>
                    <a href="{{url('forgotpassword')}}">Forgotten Password?</a>
                </label>
            </div>
            <button class="au-btn au-btn--block m-b-20 custom-button" type="submit">sign in</button>    
        </form> 
    </div>
</div>
<SCript>
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

});
</SCript>
@endsection