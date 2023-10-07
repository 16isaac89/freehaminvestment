<?php

namespace App\Http\Controllers\Member\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Http\Controllers\Traits\MediaUploadingTrait;

class ProfileController extends Controller
{
    use MediaUploadingTrait;
    public function profile(){
        return view('member.dashboard.profile');
    }
    public function changepwd(){
        $user = \Auth::guard('member')->user();
        $hashedPassword = $user->password;

if (Hash::check(request()->newpwd, $hashedPassword)) {
    $user->update([
        'password'=>bcrypt(request()->newpwd),
    ]);
    return redirect()->back()->with('success', 'Your password has been changed successfully!');
}else{
    return redirect()->back()->with('error', 'Yourold password is wrong!');
}

    }


    public function changeprofile(){
        $user = \Auth::guard('member')->user();
        $user ->first_name = request()->first_name;
        $user ->second_name = request()->second_name;
        $user ->email = request()->email;
        $user ->phone_1 = request()->phone_1;
        $user ->save();
        return redirect()->back()->with('success', 'Your profile info has been changed successfully!');
    }
}
