<?php

namespace App\Http\Controllers;
use App\Models\Commentaires;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    //

    public function ajout_commentaire(request $request,$id)
    {

        $add= new Commentaires;
        $add->contenu_comm=$request->commentaire;
        $add->user_id=Auth::user()->id;
        $add->publication_id=$id;
        $add->save();

        return redirect()->route('cloneinstagram.accueil');
        
    }

   
}
