@extends('layouts.member')
@section('content')
   <!-- start page content-->
   <div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Pages</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-outline-primary">Settings</button>
          <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card radius-10">
          <div class="card-body">
            <form>
            <h5 class="mb-3">Edit Profile</h5>
            <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
              <div class="user-change-photo shadow">
                <img src="assets/images/avatars/06.png" alt="...">
              </div>
              <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4"><ion-icon name="image-sharp"></ion-icon>Change Photo</button>
            </div>
            <h5 class="mb-0 mt-4">User Information</h5>
            <hr>
            <div class="row g-3">
              <div class="col-6">
                 <label class="form-label">Phone Number</label>
                 <input type="text" class="form-control" name="phone_1" value="{{ \Auth::guard('member')->user()->phone_1 }}">
              </div>
              <div class="col-6">
               <label class="form-label">Email address</label>
               <input type="text" class="form-control" name="email" value="{{ \Auth::guard('member')->user()->email }}">
             </div>
               <div class="col-6">
                 <label class="form-label">First Name</label>
                 <input type="text" class="form-control" name="first_name" value="{{ \Auth::guard('member')->user()->first_name }}">
             </div>
             <div class="col-6">
                 <label class="form-label">Last Name</label>
                 <input type="text" class="form-control" name="second_name" value="{{ \Auth::guard('member')->user()->second_name }}">
             </div>
           </div>

           <h5 class="mb-0 mt-4">Change Password</h5>
           <hr>
           <form method="post" action="{{ route('member.changepwd') }}">
            @csrf
           <div class="row g-3">
            <div class="col-12">
              <label class="form-label">Old Password</label>
              <input type="text" class="form-control" name="oldpwd" value="123456789">
             </div>
             <div class="col-6">
                <label class="form-label">New Password</label>
                <input type="text" class="form-control" name="newpwd">
             </div>
             <div class="col-6">
              <label class="form-label">Confirm Password</label>
              <input type="text" class="form-control" name="cpwd">
            </div>
            </div>
            <div class="text-start mt-3">
              <button type="submit" class="btn btn-primary px-4">Save Password</button>
            </div>
        </form>
          </div>
         </form>
        </div>
      </div>
    </div><!--end row-->

    </div>
    <!-- end page content-->
    @endsection
