<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Publication;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //

    public function profil_admin()
    {
        $posts=Auth::user()->publications;
        return view ('cloneinstagram.profils.profil-admin')->with(['posts'=>$posts]);
    }

    public function profil_user()
    {
        return view ('cloneinstagram.profils.profil-user');
    }

    public function modifier_profil()
    {
        return view ('cloneinstagram.profils.modifier-profil');
    }

    public function change_profil(request $request)
    {

        $add=Auth::user();
        $add->name=$request->nom;
        $add->email=$request->email;

        if(isset($request->photo))
        {
            $original_name =  $request->photo->getClientOriginalName();
            $filename =  pathinfo($original_name,PATHINFO_FILENAME); 
            $extension =  $request->photo->getClientOriginalExtension(); 
            $filename_store = $filename.time().'.'.$extension;
            $request->photo->move('uploads/avatars', $filename_store);

            $add->profile_photo_path='uploads/avatars/'.$filename_store;

        }
        else
        {
            $add->profile_photo_path=$add->profile_photo_path;
        }


        $add->save();

        return redirect()->route('cloneinstagram.modifier-profil');
    }


    public function enregistrement_profil()
    {
        $posts=Auth::user()->publications->where('enregistre',1);
        //dd($posts);
        return view ('cloneinstagram.profils.enregistrement-profil')->with(['posts'=>$posts]);
    }


    public function ajout_enregistre(request $request,$id)
    {
        $enregistre=Publication::find($id);


        if($enregistre->enregistre==1){
            $enregistre->enregistre=0;
        }
        else{
            $enregistre->enregistre=1;  
        }    

        $enregistre->save();
        return redirect()->route('cloneinstagram.accueil');
        
    }




    

}
