@extends('layouts.member')
 @section('content')
 <!-- start page content-->
 <div class="page-content">

    <!--start breadcrumb-->

<div class="row">
        <div class="col">
          <div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-start gap-2">
                <div>
                  <p class="mb-0 fs-6">Total Shares</p>
                </div>
                <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                  <ion-icon name="wallet-outline"></ion-icon>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3">
                <div>
                  <h4 class="mb-0">$92,854</h4>
                </div>
                <div class="ms-auto">+6.32%</div>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-start gap-2">
                <div>
                  <p class="mb-0 fs-6">Last Transaction</p>
                </div>
                <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                  <ion-icon name="bar-chart-outline"></ion-icon>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3">
                <div>
                  <h4 class="mb-0">48.76%</h4>
                </div>
                <div class="ms-auto">+8.52%</div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!--end row-->


    <!--end breadcrumb-->

          <h6 class="mb-0 text-uppercase">Savings Transactions</h6>
          <hr/>
          <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table id="example2" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Created At</th>
                                  <th>Amount</th>
                                  <th>Transaction</th>
                                  <th>Proof</th>

                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Tiger Nixon</td>
                                  <td>System Architect</td>
                                  <td>Edinburgh</td>
                                  <td>61</td>

                              </tr>

                          </tbody>
                          <tfoot>
                              <tr>
                                <th>Created At</th>
                                <th>Amount</th>
                                <th>Transaction</th>
                                <th>Proof</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>


    </div>
    <!-- end page content-->
    @endsection
