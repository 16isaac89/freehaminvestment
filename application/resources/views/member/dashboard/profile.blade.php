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
            <form method="POST" action="{{ route("admin.members.store") }}" enctype="multipart/form-data">
                @csrf
        <h5 class="mb-3">Edit Profile</h5>
        <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
            <div class="form-group">

                <div class="needsclick dropzone" id="profile_photo-dropzone">
                </div>
            </div>


            <div class="form-group">
                <label for="profile_photo">{{ trans('cruds.member.fields.profile_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('profile_photo') ? 'is-invalid' : '' }}" id="profile_photo-dropzone">
                </div>
                @if($errors->has('profile_photo'))
                    <span class="text-danger">{{ $errors->first('profile_photo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.profile_photo_helper') }}</span>
            </div>
          <div class="user-change-photo shadow">
            <img src="assets/images/avatars/06.png" alt="...">
          </div>
          <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4"><ion-icon name="image-sharp"></ion-icon>Change Photo</button>
        </div>
        </form>
            <form method="post" action="{{ route('member.changeprofile') }}">
                @csrf

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
           <div class="text-start mt-3">
            <button type="submit" class="btn btn-primary px-4">Change Profile</button>
          </div>
      </form>

           <h5 class="mb-0 mt-4">Change Password</h5>
           <hr>
           <form method="post" action="{{ route('member.changepwd') }}">
            @csrf
           <div class="row g-3">
            <div class="col-12">
              <label class="form-label">Old Password</label>
              <input type="password" class="form-control" name="oldpwd" value="123456789">
             </div>
             <div class="col-6">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" name="newpwd">
             </div>
             <div class="col-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="cpwd">
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
    @section('scripts')
    <script>
   $(document).ready(function () {
        Dropzone.options.profilePhotoDropzone = {
        url: '{{ route('member.storeMedia') }}',
        maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
          size: 2,
          width: 4096,
          height: 4096
        },
        success: function (file, response) {
          $('form').find('input[name="profile_photo"]').remove()
          $('form').append('<input type="hidden" name="profile_photo" value="' + response.name + '">')
        },
        removedfile: function (file) {
          file.previewElement.remove()
          if (file.status !== 'error') {
            $('form').find('input[name="profile_photo"]').remove()
            this.options.maxFiles = this.options.maxFiles + 1
          }
        },
        init: function () {
    @if(isset($member) && $member->profile_photo)
          var file = {!! json_encode($member->profile_photo) !!}
              this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="profile_photo" value="' + file.file_name + '">')
          this.options.maxFiles = this.options.maxFiles - 1
    @endif
        },
        error: function (file, response) {
            if ($.type(response) === 'string') {
                var message = response //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file
            }
            file.previewElement.classList.add('dz-error')
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
            _results = []
            for (_i = 0, _len = _ref.length; _i <script _len; _i++) {
                node = _ref[_i]
                _results.push(node.textContent = message)
            }

            return _results
        }
    }
})
    </script>
    @endsection
