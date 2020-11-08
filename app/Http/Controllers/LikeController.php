<?php

namespace App\Http\Controllers;
use App\Models\Like;
use App\Models\publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //

    public function ajout_like(request $request,$id)
    {

        
        $like=Publication::find($id);

           

        if($like->like==1){
    
            $add=Like::where('publication_id',$id);
            $add->delete();

            $like->like=0;
        }
        else{

            $add= new Like;
            $add->user_id=Auth::user()->id;
            $add->publication_id=$id;
            $add->like=1;
            $add->save();
            
            $like->like=1;  
        }    

        $like->save();
        

        return redirect()->route('cloneinstagram.accueil');
        
    }

}
