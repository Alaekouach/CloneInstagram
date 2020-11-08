<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //

    public function ajout_publication(request $request)
    {
        
        $original_name =  $request->photo->getClientOriginalName();

        $filename =  pathinfo($original_name,PATHINFO_FILENAME); 

        $extension =  $request->photo->getClientOriginalExtension(); 

        $filename_store = $filename.time().'.'.$extension;

        $request->photo->move('uploads', $filename_store);

        
        $add= new Publication;
        $add->photo='uploads/'.$filename_store;
        $add->description=$request->description;
        $add->user_id=Auth::user()->id;
        $add->save();

        return redirect()->route('cloneinstagram.profil-admin');
        
    }
}
