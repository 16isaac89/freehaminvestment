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
              <h2 class="title text-white text-center">FAQ</h2>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @foreach ($faqs as $faq)
            <div id="{{ $faq->id }}" class="panel-group accordion transparent">
              <div class="panel">
                <div class="panel-title"> <a data-parent="#{{ $faq->id }}" data-toggle="collapse" href="#faq-{{ $faq->id }}" class="{{ $faq->id === 1 ? 'active':'' }}" aria-expanded="true"> <span class="open-sub"></span> <strong>Q. {!! $faq->question !!}</strong></a> </div>
                <div id="faq-{{ $faq->id }}" class="panel-collapse collapse in" role="tablist" aria-expanded="false">
                  <div class="panel-content">
                  {!! $faq->answer !!}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- divider: what makes us different -->
    <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.1" data-bg-img="http://placehold.it/1920x1280">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">Did not find your answer?</h3>
              <h2>Just call at <span class="text-theme-color-2">0753616415/0759433090/0759849517</span> for inquiries</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 @endsection
