@extends('cloneinstagram.template-auth')

@section('titre')
    Inscription
@endsection

@section('contenu1')
    <p class="container col-md-11" style="color:grey"><strong>Inscrivez-vous pour voir les photos et vidéos de vos amis.</strong></p>
    <div class="container col-md-12 ">
        <div class="bg-white ml-4 mt-2" style="position:absolute; width:15px; height:18px;"><i class="fab fa-facebook-f pl-1 mt-1" style="color:rgb(0,149,246);"></i></div>
        <a href=""><input type="submit" class="btn btn-sm text-white" style="width:100%; background-color:rgb(0,149,246);" value=" Se connecter avec Facebook"></a>
    </div>
@endsection


@section('contenu2')

    <form action="" method="POST">
        <div class="">
            <input type="email" name="email" placeholder="Votre E-mail" style="width:100%;border-color:rgb(218,220,224); font-size: 12px;" class="bg-light mt-2 p-2 border">
            <input type="text" name="nom" placeholder="Nom complet" style="width:100%;border-color:rgb(218,220,224); font-size: 12px;" class="bg-light mt-2 p-2 border">
            <input type="text" name="username" placeholder="Nom utilisateur" style="width:100%;border-color:rgb(218,220,224); font-size: 12px;" class="bg-light mt-2 p-2 border">
            <input type="password" name="password" placeholder="Mot de passe" style="width:100%;border-color:rgb(218,220,224); font-size: 12px;" class="bg-light mt-2 p-2 border">
        </div>
        <div class="mt-3 mb-4">
            <input type="submit" name="ajouter" value="Inscription" class="btn btn-sm text-white " style="width:100%;background-color:rgb(0,149,246);">
        </div>
    </form>

    <p class="text-center" style="font-size:0.9rem" ><small class="text-secondary">En vous inscrivant, vous acceptez nos <span ><a href="" class="text-secondary font-weight-bold">Conditions générales</a></span>, notre <span><a href="" class="text-secondary font-weight-bold">Politique d’utilisation des données</a></span> et notre <span><a href="" class="text-secondary font-weight-bold">Politique d’utilisation des cookies.</a></span></small></p>

@endsection

@section('contenu3')

    <p>Vous avez un compte ? <span><a href="{{ route('cloneinstagram.index') }}" class="text-info">Connectez-vous</a></span></p>

@endsection