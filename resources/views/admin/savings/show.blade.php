@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.saving.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.savings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.id') }}
                        </th>
                        <td>
                            {{ $saving->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.member') }}
                        </th>
                        <td>
                            {{ $saving->member->first_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.target_amount') }}
                        </th>
                        <td>
                            {{ $saving->target_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.from_date') }}
                        </th>
                        <td>
                            {{ $saving->from_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.to_date') }}
                        </th>
                        <td>
                            {{ $saving->to_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.amount_saved') }}
                        </th>
                        <td>
                            {{ $saving->amount_saved }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saving.fields.balance') }}
                        </th>
                        <td>
                            {{ $saving->balance }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.savings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection