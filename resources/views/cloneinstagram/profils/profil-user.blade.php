@extends('cloneinstagram.template-profil')

@section('titre')
    user
@endsection

@section('button-profil')
    Contacter
@endsection


@section('contenu2')

<div class="container col-md-12 d-flex mt-4 mb-5">
        <div class="d-flex flex-wrap col-md-6   ">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem" >
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem"> 
            <img src="..\pictures\profils-users\Desert.jpg" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem">
        </div>

        <div class="col-md-6 text-center bg-white" style="padding-top: 150px;" >
            <p ><strong>Commencez à capturer et partager vos moments</strong></p>
            <p>Téléchargez l’app pour partager votre première photo ou vidéo. </p>
            <div class="container col-md-8 d-flex mt-2 mb-3 ">
                <a href=""><img class="ml-1" src="pictures\img-app-store.png" alt="" style="width:100%; height:50%"></a>
                <a href=""><img class="ml-2" src="pictures\img-google-play.png" alt="" style="width:100%; height:50%"></a>
            </div>
        </div>
    </div>
    

@endsection