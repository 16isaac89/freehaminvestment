<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SharesController extends Controller
{
    public function index(){
        $shares = \Auth::guard('member')->user()->shares;
        $latest = \Auth::guard('member')->user()->shares()->latest()->first();
        return view('member.dashboard.shares',compact('shares','latest'));
    }
}
