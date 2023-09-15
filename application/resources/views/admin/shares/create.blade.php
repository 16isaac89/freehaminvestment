@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.share.title_singular') }}
        <b>MAXIMUM SHARES:</b><b id="maximumshares"></b>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.shares.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="member_id">{{ trans('cruds.share.fields.member') }}</label>
                <select class="form-control select2 {{ $errors->has('member') ? 'is-invalid' : '' }}" name="member_id" id="member">
                    @foreach($members as $id => $entry)
                        <option value="{{ $id }}" {{ old('member_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member'))
                    <span class="text-danger">{{ $errors->first('member') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.share.fields.member_helper') }}</span>
            </div>
            <input  id="shareprice" name="price" type="hidden">
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.share.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" min="1" name="quantity" id="quantity" value="{{ old('quantity', '') }}" step="1" required>
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.share.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount">{{ trans('cruds.share.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" readonly name="amount" id="amount" value="{{ old('amount', '') }}" step="0.01">
                @if($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.share.fields.amount_helper') }}</span>
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
   $(".select2").change(function () {
   let id = this.value
   $('.loader').modal('show');
   let route = "{{ route('admin.member.shares') }}";
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
                    let max = response.max
                    let maxshares = max-shares
                    let shareprice = response.shareprice
                    var input = document.getElementById("quantity");
                                input.setAttribute("max",maxshares);
                    document.getElementById('quantity').value = maxshares
                    document.getElementById('shareprice').value = shareprice
                    document.getElementById('maximumshares').innerHTML = maxshares
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
@endsection
