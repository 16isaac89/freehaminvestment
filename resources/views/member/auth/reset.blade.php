@extends('layouts.memberauth')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">
        <div class="reset-passowrd">
          <div class="card radius-10 w-100 mt-8">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Reset password</h4>
                <p>You will receive an e-mail in maximum 60 seconds</p>
              </div>
              <form class="form-body row g-3" method="post" action="{{route('site.memberresetpwd.post')}}">
                @csrf
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="Your email Address">
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">New Password</label>
                    <input type="email" class="form-control" id="inputEmail" name="newpwd" required placeholder="New Password">
                  </div>
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Re-enter password</label>
                    <input type="email" class="form-control" id="inputEmail" name="confirmpwd" required placeholder="Re Enter password">
                  </div>
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
