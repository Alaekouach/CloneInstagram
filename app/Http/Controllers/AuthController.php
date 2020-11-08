<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function inscription()
    {
       return view ('cloneinstagram.Authentification.inscription');
    }

    public function index()
    {
        return view ('cloneinstagram.Authentification.index');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
    public function session()
    {
        Auth::logout();
        return redirect('/register');
    }

}
