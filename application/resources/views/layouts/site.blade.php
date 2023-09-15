<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="fundpress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Freham | Investment group limited</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('site/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('site/css/animate.css" rel="stylesheet')}}" type="text/css">
<link href="{{ asset('site/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('site/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('site/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('site/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('site/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('site/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{ asset('site/css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('site/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('site/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('site/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('site/css/colors/theme-skin-color-set-4.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('site/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('site/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('site/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('site/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('site/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('site/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<style>
    #more {display: none;}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-7 pt-10 pb-10">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#"> 0753616415/0759433090/0759849517</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 5:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">support@frehaminvestmentgroupltd.org</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 pt-10 pb-10">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  <a href="{{ route('site.faq') }}" class="text-white">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="{{ route('site.faq') }}" class="text-white">Help</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="{{ route('site.faq') }}" class="text-white">Support</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 pb-10">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  <a class="btn btn-success btn-flat btn-xs p-5 font-11 pl-10 pr-10" href="{{route('site.memberloginform')}}">Login</a>
                </li>
                <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-primary btn-flat btn-xs br-20 p-5 font-11 pl-10 pr-10 " href="{{ route('site.memberregform') }}">Join Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="{{ route('site.index') }}">
              <img src="{{ asset('site/images/logo.png') }}" alt="" style="width:160px;height:260px;position:absolute;">
            </a>
            <ul class="menuzord-menu">
              <li class="{{ \Request::routeIs('site.index') ? 'active' : '' }} ml-5"><a href="{{ route('site.index') }}">Home</a></li>
              <li class="{{ \Request::routeIs('site.about') ? 'active' : '' }}  ml-5"><a href="{{ route('site.about') }}">About Us</a></li>
			  <li class="{{ \Request::routeIs('site.team') ? 'active' : '' }}  ml-5"><a href="{{ route('site.team') }}">Our Team</a></li>
			  <li class="{{ \Request::routeIs('site.contact') ? 'active' : '' }}  ml-5"><a href="{{ route('site.contact') }}">Contact Us</a></li>
                <ul class="dropdown">
                  <li><a href="features-preloader.html">Preloaders</a></li>
                  <li><a href="#">Header</a>
                    <ul class="dropdown">
                      <li><a href="features-header-style1.html">Header Style1</a></li>
                      <li><a href="features-header-style2.html">Header Style2</a></li>
                      <li><a href="features-header-style3.html">Header Style3</a></li>
                      <li><a href="features-header-style4.html">Header Style4</a></li>
                      <li><a href="features-header-style5.html">Header Style5</a></li>
                      <li><a href="features-header-style6.html">Header Style6</a></li>
                      <li><a href="features-header-style7.html">Header Style7</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page Title</a>
                    <ul class="dropdown">
                      <li><a href="features-page-title-text-left.html">Text Left</a></li>
                      <li><a href="features-page-title-text-center.html">Text Center</a></li>
                      <li><a href="features-page-title-text-right.html">Text Right</a></li>
                      <li><a href="features-page-title-mini-version.html">Mini Version</a></li>
                      <li><a href="features-page-title-big-version.html">Big Version</a></li>
                      <li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
                      <li><a href="features-page-title-bg-white.html">Bg White</a></li>
                      <li><a href="features-page-title-bg-image.html">Bg Image</a></li>
                      <li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
                      <li><a href="features-page-title-bg-video.html">Bg Video</a></li>
                      <li><a href="features-page-title-full-transparent.html">Full Transparent</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Side Push Panel</a>
                    <ul class="dropdown">
                      <li><a href="features-side-push-panel-left-overlay.html">Left Overlay</a></li>
                      <li><a href="features-side-push-panel-left-push.html">Left Push</a></li>
                      <li><a href="features-side-push-panel-right-overlay.html">Right Overlay</a></li>
                      <li><a href="features-side-push-panel-right-push.html">Right Push</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Sliders</a>
                    <ul class="dropdown">
                      <li><a href="#">Revolution Slider</a>
                        <ul class="dropdown">
                          <li><a href="features-home-revslider.html">Revolution Slider</a></li>
                          <li><a href="features-rev-slider-premium-templates.html">Revolution Slider All In One</a></li>
                        </ul>
                      </li>
                      <li><a href="features-home-bg-image-slider.html">Bg Image Slider</a></li>
                      <li><a href="features-home-owl-fullwidth-carousel.html">Owl Fullwidth Carousel</a></li>
                      <li><a href="features-home-parallax-bg.html">Static/Parallax Image Bg</a></li>
                      <li><a href="features-home-video-bg.html">Video Image Bg</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Form</a>
                    <ul class="dropdown">
                      <li><a href="#">Subscribe Form</a>
                        <ul class="dropdown">
                          <li><a href="form-subscribe.html">Form style 1</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="form-appointment-style1.html">Form style 1</a></li>
                          <li><a href="form-appointment-style2.html">Form style 2</a></li>
                          <li><a href="form-appointment-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Job Apply Form</a>
                        <ul class="dropdown">
                          <li><a href="form-job-apply-style1.html">Form style 1</a></li>
                          <li><a href="form-job-apply-style2.html">Form style 2</a></li>
                          <li><a href="form-job-apply-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Quick Contact Form</a>
                        <ul class="dropdown">
                          <li><a href="form-quick-contact-style1.html">Form style 1</a></li>
                          <li><a href="form-quick-contact-style2.html">Form style 2</a></li>
                          <li><a href="form-quick-contact-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Paypal Form <span class="label label-success">New</span></a>
                    <ul class="dropdown">
                      <li><a href="#">Donation Onetime</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-onetime-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-onetime-style2.html">Style2</a></li>
                          <li><a href="form-paypal-donate-onetime-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-onetime-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-onetime-style5.html">Style5</a></li>
                          <li><a href="form-paypal-donate-onetime-style6.html">Style6</a></li>
                          <li><a href="form-paypal-donate-onetime-style7.html">Style7</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Donation Recurring</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-recurring-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-recurring-style2.html"> Style2</a></li>
                          <li><a href="form-paypal-donate-recurring-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-recurring-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-recurring-style5.html">Style5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Both Onetime/Recurring</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-both-onetime-recurring-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style2.html">Style2</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style5.html">Style5</a></li>
                        </ul>
                      </li>
                      <li><a href="form-paypal-cart-style1.html">Cart Payment</a></li>
                      <li><a href="form-paypal-order-style1.html">Order Payment Style1</a></li>
                      <li><a href="form-paypal-order-style2.html">Order Payment Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Popup Promo Box</a>
                    <ul class="dropdown">
                      <li><a href="features-popup-promo-box.html">Default</a></li>
                      <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Footer</a>
                    <ul class="dropdown">
                      <li><a href="features-footer-style1.html#footer">Footer One</a></li>
                      <li><a href="features-footer-style2.html#footer">Footer Two</a></li>
                      <li><a href="features-footer-style3.html#footer">Footer Three</a></li>
                      <li><a href="features-footer-style4.html#footer">Footer Four</a></li>
                      <li><a href="features-footer-style5.html#footer">Footer Five</a></li>
                      <li><a href="features-footer-style6.html#footer">Footer Six</a></li>
                      <li><a href="features-footer-style7.html#footer">Footer Seven</a></li>
                      <li><a href="features-footer-style8.html#footer">Footer Eight</a></li>
                      <li><a href="features-footer-style9.html#footer">Footer Nine</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->

@yield('content')
    <!-- Section: Gallery -->

  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-8 col-md-8">
          <div class="widget dark">
            <img class="mt-10 mb-15" alt="" src="images/logo-wide-white.png">
            <p class="font-16 mb-10">
                FREHAM investment group is a group of people with an aim of investing in profitable businesses after the five
                years of saving in 2028.
                We want by the end of five years to be with maximumly 18 billion and not less than 15 billion.
            </p>
            <a class="font-14" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>


        <div class="col-sm-4 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <ul class="list-border">
              <li><a href="#">0753616415/0759433090/0759849517</a></li>
              <li><a href="#">support@frehaminvestmentgroupltd.org/</a></li>
              <li><a href="#" class="lineheight-20">Gwanda Mall, 2nd Floor Room No.IT10</a></li>
            </ul>
            <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
            <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
              <label class="display-block" for="mce-EMAIL"></label>
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
              </div>
            </form>

            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#footer-mailchimp-subscription-form').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p style="text-align: center"> Copyright © 2023-<script>document.write(new Date().getFullYear())</script> FrehamInv Group Ltd All Rights Reserved built with love by k.isaac1968@gmail.com(256785558680/701361609)</p>

          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('site/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('site/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
    function readmore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>
