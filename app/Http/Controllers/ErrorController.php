<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function notfound()
    {
        return view('errors.404');
    }
    public function fatal()
    {
        return view('errors.500');
    }
    
    public function autorisations()
    {
        switch (auth()->guest()){
            case true: 
                return view('erreurGuest');
            break;
            case false: 
                switch (auth()->user()->grade){
                    case 1: 
                    return view('erreurDroits');
                    break;
                    case 2: 
                    return view('erreurDroits');
                    break;
                }
            break;
        }
    }   
}
