<?php

namespace app\Http\Controllers\auth;

use Illuminate\Http\Request;

class Register{
  public function show(){
      return view('auth.register');
  }

  public function toRegister(Request $request){

  }
}
