<?php

namespace app\Http\Controllers\auth;

use Illuminate\Http\Request;

use App\User;

class Login{
  public function show(){
      return view('auth.login');
  }

  public function toLogin(Request $request){
    // $user = User::where(['username',$request->username,'password',app('hash')->make($request->password)])
    //             ->get();
    //
    // if ($user) {
    //   return 'sesuai';
    // }else{
    //   return 'tidak sesuai';
    // }
  }
}
