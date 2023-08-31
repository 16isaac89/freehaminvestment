<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySavingRequest;
use App\Http\Requests\StoreSavingRequest;
use App\Http\Requests\UpdateSavingRequest;
use App\Models\Member;
use App\Models\Saving;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Helpers\HelperClass;
use DB;
use App\Models\Transaction;

class SavingsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('saving_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $savings = Saving::with(['member'])->get();

        return view('admin.savings.index', compact('savings'));
    }

    public function create()
    {
        abort_if(Gate::denies('saving_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $members = Member::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.savings.create', compact('members'));
    }

    public function store(StoreSavingRequest $request)
    {
        //dd(request()->all());
        DB::beginTransaction();

            try {
                $saving = Saving::create([
                    'member_id'=>request()->member_id,
                    'target_amount'=>request()->target_amount,
                    'month'=>request()->month,
                    'year'=>request()->year,
                    'price'=>request()->price,
                    'amount_saved'=>request()->amount_saved,
                    'balance'=>request()->target_amount-request()->amount_saved,
                ]);
                $transaction = new Transaction(['amount'=>request()->amount_saved,'txn_id'=>(new HelperClass)->generateRandomString(),'user_id'=>\Auth::user()->id]);
                $saving->transaction()->save($transaction);
                if ($request->input('image', false)) {
                    $id = $saving->load('transaction');
                    $saving->transaction->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
                }
                DB::commit();
                return redirect()->route('admin.savings.index');
                // all good
            } catch (\Exception $e) {
                DB::rollback();
                dd($e);
                //return \Redirect::back()->withErrors(['msg' => 'The following error occured please try again '.$e]);
                // something went wrong
            }


    }

    public function edit(Saving $saving)
    {
        abort_if(Gate::denies('saving_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $members = Member::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $saving->load('member');

        return view('admin.savings.edit', compact('members', 'saving'));
    }

    public function update(UpdateSavingRequest $request, Saving $saving)
    {
        $saving->update($request->all());

        return redirect()->route('admin.savings.index');
    }

    public function show(Saving $saving)
    {
        abort_if(Gate::denies('saving_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $saving->load('member');

        return view('admin.savings.show', compact('saving'));
    }

    public function destroy(Saving $saving)
    {
        abort_if(Gate::denies('saving_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $saving->delete();

        return back();
    }

    public function massDestroy(MassDestroySavingRequest $request)
    {
        $savings = Saving::find(request('ids'));

        foreach ($savings as $saving) {
            $saving->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
