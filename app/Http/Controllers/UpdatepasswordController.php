<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use Auth;
use App\User;
use Hash;

class UpdatepasswordController extends Controller
{
    function updatepassword(){
      return view('backend/Updatepassword/updatepassword');
    }

    function updatepasswordinsert(Request $request){
      $request->validate([
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required',
      ],[
        'old_password.required' => 'Please enter your old password',
        'new_password.required' => 'Please enter your new password',
        'confirm_password.required' => 'Please enter your confirm password',
      ]);

      $hased_password = Auth::user()->password;
      $new_password = $request->new_password;
      $confirm_password = $request->confirm_password;

      if( $new_password == $confirm_password){
        if(Hash::check($request->old_password, $hased_password)){
          $user = User::find(Auth::id());
          $user->password = Hash::make($request->new_password);
          $user->save();
          return back()->with('success_msg', 'Your password has been changed successfully!');
        }else{
          return back()->with('err_msg', 'your old password does not match!');
        }
      }else{
        return back()->with('no_match', 'your password does not match with confirm password!');
      }
    }
}
