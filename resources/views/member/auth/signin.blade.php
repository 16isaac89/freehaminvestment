@extends('layouts.memberauth')
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
      <div class="card radius-10">
        <div class="card-body p-4">
          <div class="text-center">
            <h4>Sign In</h4>
            <p>Sign In to your account</p>
          </div>
          <form class="form-body row g-3" method="POST" action="{{ route('site.memberloginpost') }}">
            @csrf
            <input type="hidden" name="ccode" id="ccode">
            {{-- <div class="col-12 col-lg-12">
              <div class="d-grid gap-2">
                <a href="javascript:;" class="btn border border-2 border-primary"><img
                    src="assets/images/icons/google.png" width="20" alt=""><span class="ms-3 fw-500">Sign in with
                    Google</span></a>
                <a href="javascript:;" class="btn border border-2 border-dark"><img
                    src="assets/images/icons/apple-black-logo.png" width="20" alt=""><span class="ms-3 fw-500">Sign
                    in with Apple</span></a>
              </div>
            </div> --}}
            <div class="col-12 col-lg-12">
              <div class="position-relative border-bottom my-3">
                <div class="position-absolute seperator-2 translate-middle-y">OR</div>
              </div>
            </div>
            <div class="col-12">
            <label for="inputEmail" class="form-label">Phone Number</label>
        </div>
            <div class="col-12">
              <input type="tel" id="phone" class="form-control" name="phone_1" value="{{ old('phone_1', '') }}" required>
            </div>
            <div class="col-12">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Your password" required>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="remember" id="flexSwitchCheckRemember">
                <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label>
              </div>
            </div>
            <div class="col-12 col-lg-6 text-end">
              <a href="{{ route('site.memberresetpwd') }}">Forgot Password?</a>
            </div>
            <div class="col-12 col-lg-12">
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <div class="col-12 col-lg-12 text-center">
              <p class="mb-0">Don't have an account? <a href="authentication-sign-up-basic.html">Sign up</a></p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
