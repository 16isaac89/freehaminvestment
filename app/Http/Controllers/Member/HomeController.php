<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function index(){
return view('member.dashboard.index');
    }

    function logout(Request $request)
{
    \Auth::guard('member')->logout();
    $request->session()->flush();
    $request->session()->regenerate();
    return redirect()->route("site.index")->with('success', 'Logout successfully');;
}
}
