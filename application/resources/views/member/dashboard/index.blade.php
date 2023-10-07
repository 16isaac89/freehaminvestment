@extends('layouts.member')
@section('content')
<div class="page-content">
    <div class="row">
      <div class="col-12 col-xl-12 d-flex">
        <div class="card radius-10 w-100">
          <div class="card-body">

            <div class="d-flex flex-column flex-lg-row align-items-lg-center align-self-end justify-content-lg-between border p-3 gap-3 mb-0 rounded-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="widget-icon rounded-circle bg-light-success text-success">
                    <ion-icon name="card-outline"></ion-icon>
                  </div>
                  <div class="">
                    <h4 class="mb-0">UGX{{$shares}}</h4>
                    <p class="mb-0 text-secondary">Total Shares(UGX)</p>
                  </div>
                </div>
                <div class="vr d-none d-lg-block"></div>
                <div class="d-flex align-items-center gap-3">
                  <div class="widget-icon rounded-circle bg-light-info text-info">
                    <ion-icon name="diamond-outline"></ion-icon>
                  </div>
                  <div class="">
                    <h4 class="mb-0">UGX{{$savings}}</h4>
                    <p class="mb-0 text-secondary">Total Savings</p>
                  </div>
                </div>
                <div class="vr d-none d-lg-block"></div>
                <div class="d-flex align-items-center gap-3">
                  <div class="widget-icon rounded-circle bg-light-purple text-purple">
                    <ion-icon name="people-circle-outline"></ion-icon>
                  </div>
                  <div class="">
                    <h4 class="mb-0"> {{ $sharecount }}</h4>
                    <p class="mb-0 text-secondary">Total Shares</p>
                  </div>
                </div>
              </div>


          </div>
        </div>
      </div>

    </div>
    <!--end row-->
    <!--end row-->
  </div>
@endsection
