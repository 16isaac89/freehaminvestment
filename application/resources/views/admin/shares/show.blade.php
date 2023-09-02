@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.share.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.shares.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.share.fields.id') }}
                        </th>
                        <td>
                            {{ $share->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.share.fields.quantity') }}
                        </th>
                        <td>
                            {{ $share->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.share.fields.amount') }}
                        </th>
                        <td>
                            {{ $share->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.share.fields.member') }}
                        </th>
                        <td>
                            {{ $share->member->first_name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.shares.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection