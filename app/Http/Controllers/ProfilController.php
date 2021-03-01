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
        $abonnements=Auth::user()->users;

        $id=Auth::user()->id;
        $users=User::all();
        $abonnés=[];

        for($i=0;$i<$users->count();$i++)
        {
            for($j=0;$j<$users[$i]->users->count();$j++)
            {
                $one_user = $users[$i]->users[$j];

                if($one_user->id == $id)
                {
                    array_push($abonnés,$users[$i]);
                }
            }
        }

        return view ('cloneinstagram.profils.profil-admin')->with(['posts'=>$posts,'abonnements'=>$abonnements,'abonnés'=>$abonnés]);
    }

    public function profil_user($id)
    {
        $user=User::find($id);
        $abonnements=$user->users;

        $users=User::all();
        $abonnés=[];

        for($i=0;$i<$users->count();$i++)
        {
            for($j=0;$j<$users[$i]->users->count();$j++)
            {
                $one_user = $users[$i]->users[$j];

                if($one_user->id == $id)
                {
                    array_push($abonnés,$users[$i]);
                }
            }
        }

        $t=Auth::user()->users;
        $statut=0;
            for($i=0;$i<$t->count();$i++)
            {
                if($t[$i]->id==$id)
                    $statut=1;
            }

        return view ('cloneinstagram.profils.profil-user')->with(['statut'=>$statut,'user'=>$user,'abonnements'=>$abonnements,'abonnés'=>$abonnés]);
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


    public function ajout_follower($id)
    {
        $u=Auth::user();
        $etat=0;
            for($i=0;$i<$u->users->count();$i++)
            { 
                if($u->users[$i]->id == $id)
                {   
                    $etat=1;
                } 
            }  

            if($etat==0)
            {
                $u->users()->attach($id);
            }
                        
            return redirect()->route('cloneinstagram.accueil');

    }


    public function supprimer_follower($id)
    {

        $u=Auth::user();
        $u->users()->detach($id);
        
        return redirect()->route('cloneinstagram.accueil');
    }




    

}
