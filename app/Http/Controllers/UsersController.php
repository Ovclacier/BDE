<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function postLogin()
  {
    Auth::attempt(array('email' => Input::get('email'),'password' => Input::get('password')));
    return Redirect::route('add_new_post');

  }
  
  public function getLogout()
  {
    Auth::logout();
    return Redirect::route('index');
  }
}
