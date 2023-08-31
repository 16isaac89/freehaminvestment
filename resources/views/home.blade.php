@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- start page content-->
<div class="page-content">

    <div class="row row-cols-1 row-cols-lg-3">
        <div class="col">
          <div class="card bg-primary bg-secondary radius-10">
             <div class="card-body">
               <div class="d-flex align-items-center gap-2">
                 <div><p class="mb-0">Shares({{ $month }})</p></div>

               </div>
               <div class="d-flex align-items-center mt-3">
                <div>
                  <h4 class="mb-0">{{ $shares }}</h4>
                  <p class="mb-0 font-13">UGX</p>
                </div>
                <div class="ms-auto">
                  <div class="w_chart" id="chart8" data-percent="60">
                    <span class="w_percent"></span>
                  </div>
                </div>
               </div>
             </div>
            </div>
         </div>
         <div class="col">
          <div class="card bg-success radius-10">
             <div class="card-body">
               <div class="d-flex align-items-center gap-2">
                 <div><p class="mb-0">Savings({{ $month }})</p></div>

               </div>
               <div class="d-flex align-items-center mt-3">
                <div>
                  <h4 class="mb-0">{{ $savings }}</h4>
                  <p class="mb-0 font-13">UGX</p>
                </div>
                <div class="ms-auto">
                  <div class="w_chart" id="chart9" data-percent="60">
                    <span class="w_percent"></span>
                  </div>
                </div>
               </div>
             </div>
            </div>
         </div>
         <div class="col">
          <div class="card bg-warning radius-10">
             <div class="card-body">
               <div class="d-flex align-items-center gap-2">
                 <div><p class="mb-0">Members({{ $month }})</p></div>
               </div>
               <div class="d-flex align-items-center mt-3">
                <div>
                  <h4 class="mb-0">{{ $members }}</h4>
                  <p class="mb-0 font-13">Members</p>
                </div>
                <div class="ms-auto">
                  <div class="w_chart" id="chart10" data-percent="60">
                    <span class="w_percent"></span>
                  </div>
                </div>
               </div>
             </div>
            </div>
         </div>
       </div><!--end row-->




       <div class="row">

          <div class="col-6 ">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                  <div>
                    <p class="mb-2">Shares</p>
                    <h4 class="mb-0">86,279 <span class="ms-1 font-13">+5.6%</span></h4>
                  </div>
                  <div class="fs-5">
                    <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                  </div>
                </div>
                <div class="mt-3" id="chart3"></div>
              </div>
            </div>
          </div>
          <div class="col-6 ">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                  <div>
                    <p class="mb-2">Savings</p>
                    <h4 class="mb-0">86,279 <span class="ms-1 font-13">+5.6%</span></h4>
                  </div>
                  <div class="fs-5">
                    <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                  </div>
                </div>
                <div class="mt-3" id="chart5"></div>
              </div>
            </div>
          </div>
       </div><!--end row-->





    </div>
    <!-- end page content-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
