@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.member.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.members.update", [$member->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="second_name">ID</label>
                <input class="form-control {{ $errors->has('freham') ? 'is-invalid' : '' }}" type="text" name="freham" id="id" value="{{ old('id', $member->freham) }}" required>

            </div>
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.member.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', $member->first_name) }}" required>
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="second_name">{{ trans('cruds.member.fields.second_name') }}</label>
                <input class="form-control {{ $errors->has('second_name') ? 'is-invalid' : '' }}" type="text" name="second_name" id="second_name" value="{{ old('second_name', $member->second_name) }}" required>
                @if($errors->has('second_name'))
                    <span class="text-danger">{{ $errors->first('second_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.second_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="freham">{{ trans('cruds.member.fields.freham') }}</label>
                <input class="form-control {{ $errors->has('freham') ? 'is-invalid' : '' }}" type="text" name="freham" id="freham" value="{{ old('freham', $member->freham) }}" required>
                @if($errors->has('freham'))
                    <span class="text-danger">{{ $errors->first('freham') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.freham_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_1">{{ trans('cruds.member.fields.phone_1') }}</label>
                <input class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" type="text" name="phone_1" id="phone_1" value="{{ old('phone_1', $member->phone_1) }}" required>
                @if($errors->has('phone_1'))
                    <span class="text-danger">{{ $errors->first('phone_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_2">{{ trans('cruds.member.fields.phone_2') }}</label>
                <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', $member->phone_2) }}">
                @if($errors->has('phone_2'))
                    <span class="text-danger">{{ $errors->first('phone_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.member.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $member->dob) }}">
                @if($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">Email</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $member->email) }}">

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


            <p>Next Of Kin Details</p>
            <div class="row">
                <div class="form-group col-6">
                    <label class="required" for="phone_1">Next Of Kin Gender</label>
                <select class="form-control" id="nok_gender"  name="nok_gender" aria-label="Default select example">
                    <option selected>Select gender</option>
                    <option value="male" {{ $member->gender === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $member->gender === 'female' ? 'selected' : '' }}>Female</option>
                  </select>
                </div>
                <div class="form-group  col-6">
                    <label for="dob">Name</label>
                    <input class="form-control date {{ $errors->has('nok_name') ? 'is-invalid' : '' }}" type="text" value="{{ $member->nok_name }}" name="nok_name" id="nok_name" value="{{ old('nok_name', $member->nok_name) }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="phone_2">Number</label>
                    <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="noknumber" id="noknumber" value="{{ old('noknumber', $member->noknumber) }}">
                </div>
                <div class="form-group  col-6">
                    <label for="dob">Relationship</label>
                    <input class="form-control {{ $errors->has('nok_relationship') ? 'is-invalid' : '' }}" type="text" name="nok_relationship" id="nok_relationship" value="{{ old('email', $member->nok_relationship) }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="phone_2">District</label>
                    <input class="form-control {{ $errors->has('nok_district') ? 'is-invalid' : '' }}" type="text" name="nok_district" id="nok_district" value="{{ old('nok_district', '') }}" value="{{ old('nok_district', $member->nok_district) }}">

                </div>
                <div class="form-group  col-6">
                    <label for="dob">Village</label>
                    <input class="form-control date {{ $errors->has('nok_village') ? 'is-invalid' : '' }}" type="text" name="nok_village" id="nok_village" value="{{ old('nok_village', $member->nok_village) }}">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.profilePhotoDropzone = {
    url: '{{ route('admin.members.storeMedia') }}',
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
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection
