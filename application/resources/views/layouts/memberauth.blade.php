<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset('member/assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('member/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('member/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('member/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('member/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('member/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('member/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Freham Sign in</title>
</head>

<body>

  <div class="login-bg-overlay au-sign-in-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
        <div class="container-fluid">
          <a href="{{ route('site.index') }}"><img src="{{ asset('site/images/logo.png') }}" style="width: 80px;height:80px;" alt="" /></a>
          <a href="{{ route('site.index') }}"><i class="fa fa-home" style="font-size:60px;color:black;"></i></a>

          </div>
        </div>
      </nav>
    </header>
    <div class="container">
        @if(session('message'))
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
            </div>
        </div>
    @endif
    @if($errors->count() > 0)
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
    @yield('content')
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
          <a href="javascript:;">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-github"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </div>
        <div class="text-center">
            <p style="text-align: center"> Copyright © 2023-<script>document.write(new Date().getFullYear())</script> FrehamInv Group Ltd All Rights Reserved built with love by k.isaac1968@gmail.com(256785558680/701361609)</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->


 <!-- JS Files-->
 <script src="{{asset('member/assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('member/assets/js/bootstrap.bundle.min.js')}}"></script>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <!--plugins-->
 <script src="{{asset('member/assets/js/index.js')}}"></script>
 <!-- Main JS-->

  <script src="{{asset('member/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script>
  const input = document.querySelector("#phone");
  const ccode = document.querySelector("#ccode");
  const form = document.querySelector("form")
  const result = document.querySelector("#result")
  const iti = window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",

  initialCountry: "ug"

  });

  //const addressDropdown = document.querySelector("#address-country");
  input.addEventListener('countrychange', () => {
  let x = iti.getSelectedCountryData().dialCode;
ccode.value = x
});
window.onload  = ()=>{
  let code = iti.getSelectedCountryData().dialCode;
  ccode.value = code
    }
</script>
<script>
    const input2 = document.querySelector("#nokphone");
    const ccode2 = document.querySelector("#nokccode");


    const iti2 = window.intlTelInput(input2, {
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",

    initialCountry: "ug"

    });

    //const addressDropdown = document.querySelector("#address-country");
    input2.addEventListener('countrychange', () => {
    let x = iti2.getSelectedCountryData().dialCode;
  ccode2.value = x
  });
  window.onload  = ()=>{
    let code = iti2.getSelectedCountryData().dialCode;
    ccode2.value = code
      }
  </script>
  @yield('scripts')
</body>



</html>
