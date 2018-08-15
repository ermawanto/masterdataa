<?php

namespace app\Http\Controllers\auth;

class Login{
  public function show(){
      return view('auth.login');
  }

  public function toLogin(){
    return 'to login';
  }
}
