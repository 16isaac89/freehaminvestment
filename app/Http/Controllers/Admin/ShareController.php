<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyShareRequest;
use App\Http\Requests\StoreShareRequest;
use App\Http\Requests\UpdateShareRequest;
use App\Models\Member;
use App\Models\Share;
use App\Models\Transaction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Helpers\HelperClass;
use DB;

class ShareController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('share_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shares = Share::with(['member'])->get();

        return view('admin.shares.index', compact('shares'));
    }

    public function create()
    {
        abort_if(Gate::denies('share_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $members = Member::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.shares.create', compact('members'));
    }

    public function store(StoreShareRequest $request)
    {
        DB::beginTransaction();

            try {
                $share = Share::create($request->all());
                $transaction = new Transaction(['amount'=>$share->amount,'txn_id'=>(new HelperClass)->generateRandomString(),'user_id'=>\Auth::user()->id]);
                $share->transaction()->save($transaction);
                DB::commit();
                return redirect()->route('admin.shares.index');
                // all good
            } catch (\Exception $e) {
                DB::rollback();
                return Redirect::back()->withErrors(['msg' => 'The following error occured please try again '.$e]);
                // something went wrong
            }

    }

    public function edit(Share $share)
    {
        abort_if(Gate::denies('share_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $members = Member::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $share->load('member');

        return view('admin.shares.edit', compact('members', 'share'));
    }

    public function update(UpdateShareRequest $request, Share $share)
    {
        $share->update($request->all());

        return redirect()->route('admin.shares.index');
    }

    public function show(Share $share)
    {
        abort_if(Gate::denies('share_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $share->load('member');

        return view('admin.shares.show', compact('share'));
    }

    public function destroy(Share $share)
    {
        abort_if(Gate::denies('share_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $share->delete();

        return back();
    }

    public function massDestroy(MassDestroyShareRequest $request)
    {
        $shares = Share::find(request('ids'));

        foreach ($shares as $share) {
            $share->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
