@extends('cloneinstagram.template-modifier-profil')

@section('title')
    Modifier Profil
@endsection

@section('contenu')
   
    <form action="{{ route('cloneinstagram.change-profil') }}" method="POST" enctype="multipart/form-data" class="d-flex mt-3 ml-3" style="height:100%">
        @csrf
            <div class="col-md-3 ">
                <div class="  mt-2 pt-2" style="height:70px;width:100%">
                    <img src="{{ Auth::user()->profile_photo_path }}" alt="" class="img-barre-main rounded-circle img-thumbnail float-right" style="width:55px;height:55px;">
                </div>
                <div class=" mt-2 pt-2" style="height:40px;width:100%">
                    <p class="float-right">Nom</p>                
                </div>
                <div class=" mt-2 pt-2" style="height:70px;width:100%">   

                </div>
                <div class=" mt-2 pt-2" style="height:40px;width:100%">
                    <p class="float-right">Nom d'utilisateur</p>                
                </div>
                <div class=" mt-2 pt-2" style="height:40px;width:100%">   

                </div>
                <div class=" mt-2 pt-2" style="height:40px;width:100%">
                    <p class="float-right">Site web</p>                
                </div>
                <div class=" mt-2 pt-2" style="height:40px;width:100%">
                    <p class="float-right">Bio</p>                
                </div>
                <div class=" mt-5 pt-2" style="height:40px;width:100%">   

                </div>
                <div class=" mt-5 pt-2" style="height:40px;width:100%">
                    <p class="float-right">Adresse E-mail</p>                
                </div>
                <div class=" mt-2 pt-2" style="height:40px;width:100%">
                    <p class=" text-right">Numéro de téléphone</p>                
                </div>
                <div class=" mt-4 pt-2" style="height:40px;width:100%">
                    <p class=" text-right">Gendre</p>                
                </div>
            </div>

            <div class="col-md-9 ">
                <div class=" mt-2 pt-3" style="line-height:0.3em;height:70px;width:100%">
                    <p class="">{{ Auth::user()->name }}</p>
                    <label for="upload">
                        <span class="glyphicon glyphicon-folder-open text-primary" aria-hidden="true" style="cursor:pointer">Modifier la photo de profil</span>
                        <input type="file" id="upload" name="photo" style="display:none">
                    </label>
                </div>
                <div class=" mt-2 pt-1" style="height:40px;width:100%">
                    <input type="text" name="nom" value="{{ Auth::user()->name }}" style="width:400px">
                </div>
                <div class=" mt-2 " style="font-size:0.9rem;color:gray;line-height:0.9em;height:70px;width:90%">
                    <p><small>Aidez les gens à trouver votre compte à l’aide de votre nom le plus connu, que ce soit votre nom complet, votre surnom ou votre nom d’entreprise.</small></p>
                    <p><small>Vous pouvez uniquement changer votre nom deux fois tous les 14 jours.</small></p>
                </div>
                <div class=" mt-2 pt-1" style="height:40px;width:100%">
                    <input type="text" name="nomcomplet" placeholder="{{ Auth::user()->name }}" style="width:400px">
                </div>
                <div class="mt-2" style="font-size:0.9rem;color:gray;line-height:0.9em;height:40px;width:100%">
                    <p><small>Dans la plupart des cas, vous pourrez reprendre votre nom d’utilisateur alaeeddine_kouach pendant encore 14 jours. <span><a href="">En savoir plus</a></span></small></p>
                </div>
                <div class=" mt-2 pt-1" style="height:40px;width:100%">
                    <input type="text" name="siteweb" placeholder="Site web" value="" style="width:400px">
                </div>
                <div class=" mt-2 pt-1" style="height:40px;width:100%">
                    <textarea name="bio" id="" cols="54" rows=""></textarea>
                </div>
                <div class=" mt-5" style="font-size:0.9rem;color:gray;line-height:0.9em;height:40px;width:90%">
                    <h6 style="font-size:0.9rem;color:gray;line-height:0.9em">Informations personnelles</h6>
                    <p><small>Fournissez vos informations personnelles, même si le compte est utilisé pour une entreprise, un animal, ou autre chose. Elles n’apparaîtront pas sur votre profil public.</small></p>
                </div>
                <div class=" mt-5 pt-1" style="height:40px;width:100%">
                    <input type="email" name="email" value="{{ Auth::user()->email }}" style="width:400px">
                </div>
                <div class=" mt-3 pt-1" style="height:40px;width:100%">
                    <input type="number" name="telephone" placeholder="06 63 66 11 44" value="" style="width:400px">
                </div>
                <div class=" mt-3 pt-1" style="height:40px;width:100%">
                    <input type="text" name="gendre" placeholder="Homme" value="" style="width:400px">
                </div>

                <div class=" mt-3 mb-4" style="height:40px;width:100%">
                    <input type="submit" name="modifier"  value="Envoyer" class="btn btn-sm btn-primary" style="">
                </div>


            </div>




    </form>



@endsection