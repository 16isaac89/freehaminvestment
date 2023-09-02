<?php

namespace App\Http\Controllers\member\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function showMemberLoginForm()
    {
        return view('member.auth.signin');
    }

    public function memberLogin(Request $request)
    {

        $this->validate($request, [
            //'phone_1'   => 'required|phone_1',
            'password' => 'required|min:6'
        ]);
        $password = $request->password;
        $phone = $request->ccode.$request->phone_1;


        if (\Auth::guard('member')->attempt(['phone_1' => $phone, 'password' => request('password')])){
            return redirect()->route('member.index');
        }

        return redirect()->back()->with('error', 'Phone Number or password is wrong.');
    }


}
