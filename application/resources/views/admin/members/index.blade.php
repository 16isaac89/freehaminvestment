@extends('layouts.admin')
@section('content')
@can('member_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.members.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.member.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Member', 'route' => 'admin.members.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.member.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Member">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.member.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.second_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.freham') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.phone_1') }}
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Approved
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.dob') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.profile_photo') }}
                        </th>
                        <th>
                            Shares
                        </th>
                        <th>
                            Savings
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $key => $member)
                        <tr data-entry-id="{{ $member->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $member->id ?? '' }}
                            </td>
                            <td>
                                {{ $member->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $member->second_name ?? '' }}
                            </td>
                            <td>
                                {{ $member->freham ?? '' }}
                            </td>
                            <td>
                                {{ $member->phone_1 ?? '' }}
                            </td>
                            <td>
                           
                                @if($member->active === 0)
                            <a href="{{route('admin.members.activate',$member->id)}}"><span class='badge badge-warning'>Inactive</span></a>
                            @else
                            <a href="{{route('admin.members.deactivate',$member->id)}}"><span class='badge badge-success'>Active</span></a>
                            @endif
                            </td>
                            <td>
                               
                            @if($member->approved === 0)
                            <a href="{{route('admin.members.approve',$member->id)}}"> <span class='badge badge-warning'>Pending</span></a>
                            @else
                            <a href="{{route('admin.members.deapprove',$member->id)}}"><span class='badge badge-success'>Approved</span></a>
                            @endif
                            </td>
                            <td>
                                {{ $member->dob ?? '' }}
                            </td>
                            <td>
                                @if($member->profile_photo)
                                    <a href="{{ $member->profile_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $member->profile_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $member->savings()->sum('amount_saved') ?? '' }}
                            </td>
                            <td>
                                {{ $member->shares()->sum('quantity') ?? '' }}
                            </td>
                            <td>
                                @can('member_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.members.show', $member->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('member_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.members.edit', $member->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('member_delete')
                                    <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('member_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.members.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Member:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
