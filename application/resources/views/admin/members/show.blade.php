@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.member.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.id') }}
                        </th>
                        <td>
                            {{ $member->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.first_name') }}
                        </th>
                        <td>
                            {{ $member->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.second_name') }}
                        </th>
                        <td>
                            {{ $member->second_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.freham') }}
                        </th>
                        <td>
                            {{ $member->freham }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.phone_1') }}
                        </th>
                        <td>
                            {{ $member->phone_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.phone_2') }}
                        </th>
                        <td>
                            {{ $member->phone_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.dob') }}
                        </th>
                        <td>
                            {{ $member->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.profile_photo') }}
                        </th>
                        <td>
                            @if($member->profile_photo)
                                <a href="{{ $member->profile_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $member->profile_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#member_savings" role="tab" data-toggle="tab">
                {{ trans('cruds.saving.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#member_shares" role="tab" data-toggle="tab">
                {{ trans('cruds.share.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="member_savings">
            @includeIf('admin.members.relationships.memberSavings', ['savings' => $member->memberSavings])
        </div>
        <div class="tab-pane" role="tabpanel" id="member_shares">
            @includeIf('admin.members.relationships.memberShares', ['shares' => $member->memberShares])
        </div>
    </div>
</div>

@endsection