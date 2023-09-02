@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.share.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.shares.update", [$share->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.share.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', $share->quantity) }}" step="1" required>
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.share.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount">{{ trans('cruds.share.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $share->amount) }}" step="0.01">
                @if($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.share.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_id">{{ trans('cruds.share.fields.member') }}</label>
                <select class="form-control select2 {{ $errors->has('member') ? 'is-invalid' : '' }}" name="member_id" id="member_id">
                    @foreach($members as $id => $entry)
                        <option value="{{ $id }}" {{ (old('member_id') ? old('member_id') : $share->member->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member'))
                    <span class="text-danger">{{ $errors->first('member') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.share.fields.member_helper') }}</span>
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