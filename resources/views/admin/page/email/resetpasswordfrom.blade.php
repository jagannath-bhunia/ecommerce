@extends("admin.layout.loginlayout")
@section('title','reset password')
@section("body")              
<div class="login-content">
    <h2>Reset password</h2>
    @include('admin.common.message')
    <div class="login-form">
        <form action="{{url('dopasswordreset')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="reset_password_token" value="{{ $token }}">
            <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="New Password" autofocus minlength="6" >
            </div>
            @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" autofocus minlength="6" >
            </div>
            @if($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
            @include('admin.common.message')
            <button class="au-btn au-btn--block m-b-20 custom-button" type="submit">Reset</button>    
        </form> 
    </div>
</div>
@endsection