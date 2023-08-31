@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.saving.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.savings.update", [$saving->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="member_id">{{ trans('cruds.saving.fields.member') }}</label>
                <select class="form-control select2 {{ $errors->has('member') ? 'is-invalid' : '' }}" name="member_id" id="member_id">
                    @foreach($members as $id => $entry)
                        <option value="{{ $id }}" {{ (old('member_id') ? old('member_id') : $saving->member->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member'))
                    <span class="text-danger">{{ $errors->first('member') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.member_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="target_amount">{{ trans('cruds.saving.fields.target_amount') }}</label>
                <input class="form-control {{ $errors->has('target_amount') ? 'is-invalid' : '' }}" type="number" name="target_amount" id="target_amount" value="{{ old('target_amount', $saving->target_amount) }}" step="0.01" required>
                @if($errors->has('target_amount'))
                    <span class="text-danger">{{ $errors->first('target_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.target_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="from_date">{{ trans('cruds.saving.fields.from_date') }}</label>
                <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}" type="text" name="from_date" id="from_date" value="{{ old('from_date', $saving->from_date) }}" required>
                @if($errors->has('from_date'))
                    <span class="text-danger">{{ $errors->first('from_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.from_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="to_date">{{ trans('cruds.saving.fields.to_date') }}</label>
                <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}" type="text" name="to_date" id="to_date" value="{{ old('to_date', $saving->to_date) }}" required>
                @if($errors->has('to_date'))
                    <span class="text-danger">{{ $errors->first('to_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.to_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount_saved">{{ trans('cruds.saving.fields.amount_saved') }}</label>
                <input class="form-control {{ $errors->has('amount_saved') ? 'is-invalid' : '' }}" type="number" name="amount_saved" id="amount_saved" value="{{ old('amount_saved', $saving->amount_saved) }}" step="0.01" required>
                @if($errors->has('amount_saved'))
                    <span class="text-danger">{{ $errors->first('amount_saved') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.amount_saved_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="balance">{{ trans('cruds.saving.fields.balance') }}</label>
                <input class="form-control {{ $errors->has('balance') ? 'is-invalid' : '' }}" type="text" name="balance" id="balance" value="{{ old('balance', $saving->balance) }}" required>
                @if($errors->has('balance'))
                    <span class="text-danger">{{ $errors->first('balance') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.saving.fields.balance_helper') }}</span>
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