<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Publication;
use App\Models\Commentaires;



//$id= Auth::id();

class AccueilController extends Controller
{
    //

    public function accueil()
    {
        
        $posts=publication::all();
        
        //$posts=Auth::user()->publications;
        return view ('cloneinstagram.Accueil.accueil')->with(['posts'=>$posts]);
    }

}
