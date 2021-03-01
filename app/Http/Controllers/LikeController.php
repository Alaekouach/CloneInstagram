<?php

namespace App\Http\Controllers;
use App\Models\Like;
use App\Models\User;
use App\Models\publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //

    public function ajout_like(Request $request)
    {

      $like=Like::where(['publication_id'=> $request->publication_id ,'user_id'=>Auth::id()])->get();

        if($like->count()>0)
        {
            $li = Like::find($like[0]->id); 
            $li->delete();
        }else{
            $add= new Like;
            $add->user_id=Auth::id();
            $add->publication_id=$request->publication_id;
            $add->like=1;
            $add->save();
        }

        $compteur=Publication::find($request->publication_id)->likes->count();
        return response()->json(['compteur'=> $compteur, 'coeur' =>  $like->count()]);
         
        //return redirect()->route('cloneinstagram.accueil');
        
    }



}
