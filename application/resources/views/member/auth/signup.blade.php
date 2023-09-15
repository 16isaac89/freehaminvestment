@extends('layouts.memberauth')
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
      <div class="card radius-10">
        <div class="card-body p-4">
          <div class="text-center">
            <h4>Sign In</h4>
            <p>Sign Up For A Feham Account</p>
          </div>
          <form class="form-body row g-3" method="POST" action="{{ route('site.memberregpost') }}">
            @csrf
            <input type="hidden" name="ccode" id="ccode">
            <input type="hidden" name="nokccode" id="nokccode">
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
                <label for="inputPassword" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your First Name" required>
              </div>
              <div class="col-12">
                  <label for="inputPassword" class="form-label">Second-Third Name</label>
                  <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Your Second and Third Name" required>
              </div>
              <div class="col-12">
                <label for="inputPassword" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Your email" required>
              </div>
              <div class="col-12">
                  <label for="inputPassword" class="form-label">NIN</label>
                  <input type="text" class="form-control" id="idno" name="idno" placeholder="Your National ID Number" required>
              </div>
              <div class="col-12">
                <label for="inputPassword" class="form-label">District</label>
                <input type="text" class="form-control" id="district" name="district" placeholder="Your district" required>
              </div>
              <div class="col-12">
                  <label for="inputPassword" class="form-label">Village</label>
                  <input type="text" class="form-control" id="village" name="village" placeholder="Your village" required>
              </div>

            <div class="col-12">
                <label for="inputEmail" class="form-label">Next Of Kin Phone Number</label>
            </div>
            <div class="col-12">
                <input type="tel" id="nokphone" class="form-control" name="nokphone_1" value="{{ old('nokphone_1', '') }}" required>
              </div>

              <div class="col-12">
                <label for="inputEmail" class="form-label">Gender</label>
            </div>
            <div class="col-12">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected="">Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>
              {{-- <div class="col-12">
                <label for="inputEmail" class="form-label">Date Of Birth</label>
            </div>
            <div class="col-12">
                <input class="result form-control" type="text" id="date" name="dob" placeholder="Date of birth...">
              </div> --}}

            <div class="col-12 col-lg-12">
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </div>
            <div class="col-12 col-lg-12 text-center">
              <p class="mb-0">Already have an account? <a href="{{ route('site.memberloginform') }}">Sign In</a></p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script src="{{asset('member/assets/plugins/datetimepicker/js/legacy.js')}}"></script>
    <script src="{{asset('member/assets/plugins/datetimepicker/js/picker.js')}}"></script>
    <script src="{{asset('member/assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
    <script src="{{asset('member/assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
    <script src="{{asset('member/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
    <script src="{{asset('member/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
    <script src="{{asset('member/assets/js/form-date-time-pickes.js')}}"></script>
    <script src="{{asset('member/assets/js/main.js')}}"></script>
@endsection
