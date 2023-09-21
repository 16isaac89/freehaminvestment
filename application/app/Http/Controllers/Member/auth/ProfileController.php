<?php

namespace App\Http\Controllers\Member\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('member.dashboard.profile');
    }
    public function changepwd(){
        return redirect()->back()->with('success', 'Your password has been changed successfully!');
    }
}
