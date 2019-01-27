<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ConnectionController extends Controller
{
    
    public function connect(){
        return view('userlogin');
    }

    public function disconnect(){
        auth()->logout();
        return redirect('/');
    }

    public function myaccount(){
        
    }

    public function connectAttempt(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        $connexion = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
     
         if ($connexion)
         {
             return redirect()->route('users.index',compact('users'))
             ->with('i', (request()->input('page', 1)-1)*2);

         }else{
             return view('welcome');
         }
    }
}
