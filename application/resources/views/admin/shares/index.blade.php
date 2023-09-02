@extends('layouts.admin')
@section('content')
@can('share_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.shares.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.share.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Share', 'route' => 'admin.shares.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.share.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Share">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.share.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.share.fields.quantity') }}
                        </th>
                        <th>
                            {{ trans('cruds.share.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.share.fields.member') }}
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
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shares as $key => $share)
                        <tr data-entry-id="{{ $share->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $share->id ?? '' }}
                            </td>
                            <td>
                                {{ $share->quantity ?? '' }}
                            </td>
                            <td>
                                {{ $share->amount ?? '' }}
                            </td>
                            <td>
                                {{ $share->member->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $share->member->second_name ?? '' }}
                            </td>
                            <td>
                                {{ $share->member->freham ?? '' }}
                            </td>
                            <td>
                                {{ $share->member->phone_1 ?? '' }}
                            </td>
                            <td>
                                @can('share_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.shares.show', $share->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('share_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.shares.edit', $share->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('share_delete')
                                    <form action="{{ route('admin.shares.destroy', $share->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('share_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.shares.massDestroy') }}",
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
  let table = $('.datatable-Share:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection