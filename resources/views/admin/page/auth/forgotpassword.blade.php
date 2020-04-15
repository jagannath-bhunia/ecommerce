@extends("admin.layout.loginlayout")
@section('title','forgot password')

@section("body")              
<div class="login-content">
    <h2>FORGOT PASSWORD</h2>
    @include('admin.common.message')
    <div class="login-form-bg">
        <!-- <img src="{{ asset('images/login-lock-icon.png') }}" alt=""> -->
        <form  method="post" action="{{ url('sendpasswordresetlink') }}">
            {{ csrf_field() }}
            <div class="form-group">
            <input type="email" class="au-input au-input--full" name="email" placeholder="Email Address" >
            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}    
            </div>
            <!-- @include('admin.common.message') -->
            <div class="login-btn">
                <button class="au-btn au-btn--block m-b-20 custom-button" type="submit">Send</button>
            </div>
        </form>    
    </div>
</div>
@endsection

