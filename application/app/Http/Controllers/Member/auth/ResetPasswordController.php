<?php

namespace App\Http\Controllers\member\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Password;
use Auth;
use Hash;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    protected $redirectTo = '/member/index';
    public function broker(){
		return Password::broker('members');
	}
    
   public function showResetForm(){
		return view('member.auth.reset')->with(['token'=> $token, 'email'=> $request->email]);
	
   }
   public function reset(){
    $data = $request->all();
    $customer = Member::where('email',$data['email'])->first();
     if($customer !== null){
        $validator = Validator::make($request->all(),
        [
        'password' => 'min:6|required|confirmed',
        ]);
       if ($validator->fails()) {
        return redirect()->back()->withErrors($validator);
        }


        $customer->update([
            'password' => Hash::make($data['password'])
          ]);

          return redirect()->route("site.memberloginform");
        }else{
            return redirect()->back()->withErrors(['msg'=>'A user with this email does not exist.']);
        }

   }
}
