<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function index(){
        $savings = \Auth::guard('member')->user()->savings()->sum('amount_saved');
        $shares = \Auth::guard('member')->user()->shares()->sum('amount');
        $sharecount = \Auth::guard('member')->user()->shares()->sum('quantity');
return view('member.dashboard.index',compact('savings','shares','sharecount'));
    }

    function logout(Request $request)
{
    \Auth::guard('member')->logout();
    $request->session()->flush();
    $request->session()->regenerate();
    return redirect()->route("site.index")->with('success', 'Logout successfully');;
}
}
