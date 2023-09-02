@extends('layouts.site')
@section('content')
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Team</h2>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Volunteers -->
    <section id="volunteers">
      <div class="container pt-70 pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-colored"> Team</span></h2>

            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">

            @foreach($teams as $team)
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="maxwidth500 mb-sm-30 border-2px">
                <div class="team-upper-block  text-center">
                  <img class="img-fullwidth" src="{{ $team->image->url }}" alt="">
                  <h4 class="mt-20 pb-0 p-10">{{ $team->name }}</h4>
                  <p class="p-20 pt-0">{{ $team->title }}</p>
                </div>
                {{-- <div class="team-lower-block bg-theme-colored text-center p-0">
                  <ul class="styled-icons icon-circled icon-sm icon-dark  icon-theme-colored pt-10 pb-10">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </section>



  </div>
 @endsection
