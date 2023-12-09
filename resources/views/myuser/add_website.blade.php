@extends('layout.app') @section('main_content')

<!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-6 login-signup-box offset-xl-3" style="margin: 170px 0 0 0;">
        <div class="utf-login-register-page-aera margin-bottom-50">
          <div class="utf-welcome-text-item">
            <h3>Request a new website</h3>
            {{-- <span>Don't Have an Account? <a href="">Log In!</a></span> --}}
		  </div>
          <form action="{{route('create')}}" method="post" id="utf-register-account-form">
            @csrf
            <div class="utf-no-border">
              <input type="text" class="utf-with-border" name="name" id="name-register" placeholder="Name" value="{{ old('name') }}"/>
            </div>
			<div class="utf-no-border">
              <input type="text" class="utf-with-border" name="lastname" id="emailaddress-register" placeholder="Last Name" value="{{ old('lastname') }}"/>
            </div>
            <div class="utf-no-border">
              <input type="text" class="utf-with-border" name="phonenumber" id="phoneInput" placeholder="(555) 555-555" value="{{old('phonenumber')}}"/>
            </div>
            <div class="utf-no-border">
              <input type="text" class="utf-with-border" name="websitekind"  placeholder="which kind website do you need ?" value="{{ old('websitekind') }}"/>
            </div>
            <div class="utf-no-border">
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="You Message" value="{{old('message')}}"></textarea>
            </div>
			{{-- <div class="i-agree checkbox margin-top-0">
				<input type="checkbox" id="two-step0">
				<label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="#">Terms &amp; Conditions</a></label>
		    </div> --}}
            <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit">Send for Start Process <i class="icon-feather-chevron-right"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/inputnumber.js') }}"></script>
@endsection
