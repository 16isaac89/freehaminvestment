<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Saving;

class SavingsController extends Controller
{
    public function index(){
        $savings = \Auth::guard('member')->user()->savings;
        $latest = \Auth::guard('member')->user()->savings()->latest()->first();
        return view('member.dashboard.savings',compact('savings','latest'));
    }

}
