@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.saving.title_singular') }}
        <b>TOTAL SHARES:</b><b id="totalshares"></b>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.savings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="member_id">{{ trans('cruds.saving.fields.member') }}</label>
                <select class="form-control select2 {{ $errors->has('member') ? 'is-invalid' : '' }}" name="member_id" id="member_id">
                    @foreach($members as $id => $entry)
                        <option value="{{ $id }}" {{ old('member_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member'))
                    <span class="text-danger">{{ $errors->first('member') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.member_helper') }}</span>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label class="required" for="target_amount">Month</label>
                    <input class="form-control month" type="text" name="month"  required>
                </div>
                <div class="form-group col-6">
                    <label class="required" for="target_amount">Year</label>
                    <input class="form-control year" type="text" name="year" required>
                </div>
            </div>


        <div class="row">

            <div class="form-group col-6">
                <label class="required" for="target_amount">Price/Share</label>
                <input class="form-control" type="number" id="savingprice" name="price" required readonly>

            </div>

            <div class="form-group col-6">
                <label class="required" for="target_amount">{{ trans('cruds.saving.fields.target_amount') }}</label>
                <input class="form-control {{ $errors->has('target_amount') ? 'is-invalid' : '' }}" required readonly type="number" name="target_amount" id="target_amount" value="{{ old('target_amount', '') }}" step="0.01" required>
                @if($errors->has('target_amount'))
                    <span class="text-danger">{{ $errors->first('target_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.target_amount_helper') }}</span>
            </div>
        </div>
            {{-- <div class="form-group">
                <label class="required" for="from_date">{{ trans('cruds.saving.fields.from_date') }}</label>
                <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}" type="text" name="from_date" id="from_date" value="{{ old('from_date') }}" required>
                @if($errors->has('from_date'))
                    <span class="text-danger">{{ $errors->first('from_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.from_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="to_date">{{ trans('cruds.saving.fields.to_date') }}</label>
                <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}" type="text" name="to_date" id="to_date" value="{{ old('to_date') }}" required>
                @if($errors->has('to_date'))
                    <span class="text-danger">{{ $errors->first('to_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.to_date_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <label class="required" for="amount_saved">{{ trans('cruds.saving.fields.amount_saved') }}</label>
                <input class="form-control {{ $errors->has('amount_saved') ? 'is-invalid' : '' }}" type="number" name="amount_saved" id="amount_saved" value="{{ old('amount_saved', '') }}" step="0.01" required>
                @if($errors->has('amount_saved'))
                    <span class="text-danger">{{ $errors->first('amount_saved') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.amount_saved_helper') }}</span>
            </div>
            {{-- <div class="form-group">
                <label class="required" for="balance">{{ trans('cruds.saving.fields.balance') }}</label>
                <input class="form-control {{ $errors->has('balance') ? 'is-invalid' : '' }}" type="text" name="balance" id="balance" value="{{ old('balance', '') }}" required>
                @if($errors->has('balance'))
                    <span class="text-danger">{{ $errors->first('balance') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.balance_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <label for="image">{{ trans('cruds.faq.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
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
    Dropzone.options.imageDropzone = {
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
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($faq) && $faq->image)
      var file = {!! json_encode($faq->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
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
    <script>
   $(".select2").change(function () {
   let id = this.value
   $('.loader').modal('show');
   let route = "{{ route('admin.member.savingshares') }}";
            let token = "{{ csrf_token()}}";
            $.ajax({
                url: route,
                type: 'POST',
                data: {
                    _token:token,
                   id:id

                },
                success: function(response) {
                    $('.loader').modal('hide');
                    let shares = response.shares
                    let savingsprice = response.savingprice
                    document.getElementById('savingprice').value = savingsprice
                    document.getElementById('totalshares').innerHTML = shares
                    document.getElementById('target_amount').value = savingsprice*shares
                },
                error: function(xhr) {
                    //Do Something to handle error
                }});
});

$("#quantity").change(function(){   // 1st
    let value = this.value
    let shareprice = document.getElementById('shareprice').value
    document.getElementById('amount').value = value*shareprice

});

    </script>
    <script>
         $('.month').datetimepicker({
    format: 'MM',
    locale: 'en',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })


  $('.year').datetimepicker({
    format: 'YYYY',
    locale: 'en',
    sideBySide: true,
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })
    </script>
@endsection
