@extends('layout.app') @section('main_content')

<!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-6 login-signup-box offset-xl-3" style="margin: 170px 0 0 0;">
        <div class="utf-login-register-page-aera margin-bottom-50"> 
          <div class="utf-welcome-text-item">
            <h3>Create Your New Account!</h3>
            <span>Don't Have an Account? <a href="{{ route('login') }}">Log In!</a></span> 
		  </div>
          <form action="{{ route('create') }}" method="post" id="utf-register-account-form">
            @csrf
            <div class="utf-no-border">
              <input type="text" class="utf-with-border" name="name" id="name-register" placeholder="User Name" value="{{ old('name') }}"/>
            </div>
			<div class="utf-no-border"> 
              <input type="email" class="utf-with-border" name="email" id="emailaddress-register" placeholder="Email Address" value="{{ old('email') }}"/>
            </div>
            <div class="utf-no-border">
              <input type="password" class="utf-with-border" name="password" id="password-register" placeholder="Password" value="{{ old('password') }}"/>
            </div>
            <div class="utf-no-border">
              <input type="password" class="utf-with-border" name="retype_password" id="password-repeat-register" placeholder="Repeat Password" value="{{ old('retype_password') }}"/>
            </div>
			<div class="i-agree checkbox margin-top-0">
				<input type="checkbox" id="two-step0">
				<label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="#">Terms &amp; Conditions</a></label>
		    </div>
            <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit">Create An Account <i class="icon-feather-chevron-right"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
