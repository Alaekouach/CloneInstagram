<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
use App\Models\Publication;
use App\Models\Commentaires;





class AccueilController extends Controller
{
    //

    public function accueil()
    {
      // pour avoir le noms de tous les users sur la page d'accueil

        $users = DB::table('users')->inRandomOrder()->take(6)->get();

        $abonnements=Auth::user()->users()->orderBy('id','asc')->take(6)->get();
        $abonnements2=Auth::user()->users()->orderByDesc('id')->take(6)->get();


      // pour afficher les publications de mes abonnements+ les publications du user authentifier

        $u=Auth::user()->users;
        $u[]=Auth::user();

        $tab=[];

        for($i=0;$i<$u->count();$i++)
        {
            for($j=0;$j<$u[$i]->publications->count();$j++)
            {
                    array_push($tab,$u[$i]->publications[$j]);
            }
        }



      // pour afficher le like pour chaque utilisateur qui s'authentifier

        $like_user = array();
        foreach($tab as $post)
        {
            $valider = 0;
            $i = 0 ;
            while($i  < $post->likes->count() )
            {
                if($post->likes[$i]->user_id == Auth::id())
                {
                    $valider = 1;
                }
                $i++;
            }
            array_push($like_user, $valider);
        }


      // les personnes qui suivent mes abonnenement


      $x=Auth::user();
      $tableau=[];

      $tableau2=[];

      for($i=0;$i<$users->count();$i++)
      {
        for($j=0;$j<$x->users->count()-1;$j++)
        {
            if($x->users[$j]->id == $users[$i]->id)
           {
              array_push($tableau, $users[$i]);
           }
        }
      }


      // for($i=0;$i<$users->count();$i++)
      // {
      //   $pos=0;
      //   $eta=0;

      //   for($j=0;$j<$x->users->count()-1;$j++)
      //   {
      //       if($x->users[$j]->id != $users[$i]->id)
      //      {
      //        $eta=1;
      //        $pos=$i;
      //         //$j=$x->users->count();
      //      }
      //      else{
      //       $eta=0;
      //      }
      //   }

      //   if($eta==1)
      //   {
      //     array_push($tableau2, $users[$pos]);
      //   }

      // }

       //dd($$users[$i]->users);

      return view ('cloneinstagram.Accueil.accueil')->with(['tableau'=>$tableau,'tab'=>$tab,'users'=>$users,'abonnements2'=>$abonnements2,'abonnements'=>$abonnements, 'changerStyle' => $like_user]);
    }


}
