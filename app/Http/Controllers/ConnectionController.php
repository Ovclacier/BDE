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
        return redirect()->route('produits.index');
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
            return redirect()->route('produits.index');

         }else{
             return redirect('/connection')->withError('error','You must enter the correct login');
         }
    }
}
