@extends('cloneinstagram.template-auth')

@section('titre')
    Authentification
@endsection

@section('contenu1')
    <form action="" method="POST">
            <div class="">
                <input type="email" name="email" placeholder="Votre E-mail" style="width:100%;border-color:rgb(218,220,224); font-size: 12px;" class="bg-light mt-2 p-2 border">
                <input type="password" name="password" placeholder="Mot de passe" style="width:100%;border-color:rgb(218,220,224); font-size: 12px;" class="bg-light mt-2 p-2 border">
            </div>
            <div class="mt-3 mb-4">
                <input type="submit" name="ajouter" value="Inscription" class="btn btn-sm text-white " style="width:100%;background-color:rgb(0,149,246);">
            </div>
        </form>
@endsection

@section('contenu2')

    <div class="container col-md-10 d-flex justify-content-around ">
        <div class="bg-info" style="width:15px; height:18px;"><i class="fab fa-facebook-f pl-1 mt-1" style="color:white;"></i></div>
        <a href=""><p class="text-dark" style="font-size:0.8rem;">Se connecter avec Facebook</p></a>
    </div>

    <div class="container col-md-10 mb-4 text-center">
        <a href=""><small class="text-dark " style="">Mot de passe oublié ?</small></a>
    </div>

@endsection

@section('contenu3')

    <p>Vous n'avez pas de compte ? <span><a href="{{ route('cloneinstagram.inscription') }}" class="text-info">Inscrivez-vous</a></span></p>

@endsection