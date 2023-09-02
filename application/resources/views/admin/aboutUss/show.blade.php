@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutUs.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutUs->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.vision') }}
                        </th>
                        <td>
                            {!! $aboutUs->vision !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.mission') }}
                        </th>
                        <td>
                            {!! $aboutUs->mission !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.about') }}
                        </th>
                        <td>
                            {!! $aboutUs->about !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection