<?php

namespace App\Http\Controllers\member\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class RegisterController extends Controller
{
    public function showMemberRegisterForm(){
        return view('member.auth.signup');
    }
    public function memberregister(Request $request){
        //dd($request->all());
        $latest = Member::latest()->first();
        $number = $latest->id+1;
        Member::create([
        'first_name'=>$request->firstname,
        'second_name'=>$request->secondname,
        'freham'=>'FICL_'.str_pad($number, 2, '0', STR_PAD_LEFT),
        'phone_1'=>$request->phone_1,
        'noknumber'=>$request->nokccode.$request->nokphone_1,
        'district'=>$request->district,
        'village'=>$request->village,
        'gender'=>$request->gender,
        'idno'=>$request->idno,
        'email'=>$request->email,
        ]);
        return redirect()->back()->with(['message'=>'Account created successfully, please await approval.']);
    }
}
