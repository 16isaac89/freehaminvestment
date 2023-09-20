<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMemberRequest;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Share;
use App\Models\Setting;

class MemberController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('member_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $members = Member::with(['media','shares','savings'])->get();

        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        abort_if(Gate::denies('member_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $users = Member::all();
        return view('admin.members.create',compact('users'));
    }

    public function store(StoreMemberRequest $request)
    {
        $latest = Member::latest()->first();
        $number = 1;
		if($latest){
		$number = $latest->id+1;
		}
        $member = Member::create($request->all()+['freham' => 'FICL_'.str_pad($number, 2, '0', STR_PAD_LEFT),'password'=>bcrypt('123456789')]);

        if ($request->input('profile_photo', false)) {
            $member->addMedia(storage_path('tmp/uploads/' . basename($request->input('profile_photo'))))->toMediaCollection('profile_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $member->id]);
        }

        return redirect()->route('admin.members.index');
    }

    public function edit(Member $member)
    {
        abort_if(Gate::denies('member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.members.edit', compact('member'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->update($request->all());

        if ($request->input('profile_photo', false)) {
            if (! $member->profile_photo || $request->input('profile_photo') !== $member->profile_photo->file_name) {
                if ($member->profile_photo) {
                    $member->profile_photo->delete();
                }
                $member->addMedia(storage_path('tmp/uploads/' . basename($request->input('profile_photo'))))->toMediaCollection('profile_photo');
            }
        } elseif ($member->profile_photo) {
            $member->profile_photo->delete();
        }

        return redirect()->route('admin.members.index');
    }

    public function show(Member $member)
    {
        abort_if(Gate::denies('member_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member->load('memberSavings', 'memberShares');

        return view('admin.members.show', compact('member'));
    }

    public function destroy(Member $member)
    {
        abort_if(Gate::denies('member_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member->delete();

        return back();
    }

    public function massDestroy(MassDestroyMemberRequest $request)
    {
        $members = Member::find(request('ids'));

        foreach ($members as $member) {
            $member->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('member_create') && Gate::denies('member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Member();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
    public function getshares(){
        $shares = Share::where('member_id',request()->id)->sum('quantity');
        $max = Setting::where('code','SHMAX')->first()->value;
        $shareprice = Setting::where('code','SHPRICE')->first()->value;
        return response()->json(['shares' => $shares,'max'=>$max,'shareprice'=>$shareprice], 200);
    }
    public function getsavingshares(){
        $shares = Share::where('member_id',request()->id)->sum('quantity');
        $max = Setting::where('code','SHMAX')->first()->value;
        $savingprice = Setting::where('code','SVPRICE')->first()->value;
        return response()->json(['shares' => $shares,'savingprice'=>$savingprice], 200);
    }
    public function activate(Member $member){
        //dd($member->active);
        $member->active = 1;
        $member->save();
        return redirect()->back()->with(['success'=>"Successfully activated the member's account."]);
    }
    public function deactivate(Member $member){
       // dd($member);
       $member->active = 0;
       $member->save();
        return redirect()->back()->with(['success'=>"Successfully de-activated the member's account."]);
    }
    public function approve(Member $member){
        //dd($member);
        $member->approved = 1;
        $member->save();
        return redirect()->back()->with(['success'=>"Successfully approved the member's account."]);
    }
    public function deapprove(Member $member){
       // dd($member);
       $member->approved = 0;
       $member->save();
        return redirect()->back()->with(['success'=>"Successfully de-approved the member's account."]);
    }
}
