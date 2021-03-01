@extends('cloneinstagram.template-profil')

@section('titre')
    user
@endsection


@section('main_profil_user')

    <div class="col-md-10 d-flex mt-4">

        <div class="container col-md-2 mt-2 mr-5  ">
            <img src="{{ asset($user->profile_photo_path) }}" alt="" style="width:170px;height:170px" class="rounded-circle ">
            
        </div>

        <div class="container col-md-7 mt-3">

            <div class="d-flex justify-content-around">
                <h3 class="font-weight-light" id="user" >{{ $user->name }}</h3>
                @if($statut==1)
                    <a href="{{ route('cloneinstagram.supprimer-follower',[$user->id]) }}" ><input type="submit" nom="désabonner" class=" btn btn-warning font-weight-bold " value="Désabonner" ></a>
                @else
                    <a href="{{ route('cloneinstagram.ajout-follower',[$user->id]) }}" ><input type="submit" nom="s'abonner" class=" btn btn-primary font-weight-bold " value="S'abonner" ></a>
                @endif
                <i class="fas fa-cog" style="font-size:32px"></i>
            </div>

            <div class="d-flex justify-content-around mt-3">
                <p>{{  count($user->publications) }} publications</p>
                <p> {{  count($abonnés) }} abonnés</p>
                <p>{{  count($abonnements) }} abonnements</p>
            </div>

            <div class="container mt-2">
                <p>{{ $user->name }}</p>
            </div>

            <div class="container mt-2">
                <p>
                    <small class="text-primary">
                        <span style="color:gray">Abonnés :</span>
                        @foreach($abonnés as $element) 
                            <a href="{{ route('cloneinstagram.profil-user',[$element->id]) }}">{{ $element->name }}</a>,
                        @endforeach
                    </small> 
                </p>
            </div>

            <div class="container mt-2">
                <p>
                    <small class="text-info">
                        <span style="color:gray">Abonnements :</span>
                        @foreach($abonnements as $element) 
                            <a href="{{ route('cloneinstagram.profil-user',[$element->id]) }}">{{ $element->name }}</a>,
                        @endforeach
                    </small> 
                </p>
            </div>
            
        </div>

    </div>

@endsection

@section('contenu2')

<div class="container col-md-12 d-flex mt-4 mb-5">
@foreach($user->publications as $posts)
        <div class="d-flex flex-wrap col-md-6   ">
            <img src="{{ asset($posts->photo) }}" alt="" style="width:150px;height:150px;margin-right:0.1rem;margin-bottom:0.1rem" >
        </div>
@endforeach

        <div class="col-md-6 text-center bg-white" style="padding-top: 50px;" >
            <p ><strong>Commencez à capturer et partager vos moments</strong></p>
            <p>Téléchargez l’app pour partager votre première photo ou vidéo. </p>
            <div class="container col-md-8 d-flex mt-2 mb-3 ">
                <a href=""><img class="ml-1" src="pictures\img-app-store.png" alt="" style="width:100%; height:100%"></a>
                <a href=""><img class="ml-2" src="pictures\img-google-play.png" alt="" style="width:100%; height:100%"></a>
            </div>
        </div>
    </div>
    

@endsection