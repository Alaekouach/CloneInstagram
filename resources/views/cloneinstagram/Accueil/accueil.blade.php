@extends('cloneinstagram.template-accueil')


@section('contenu1')

<div class="d-flex">

    <div class=" col-md-8 ">

        <div class=" container barre-main bg-white border mt-5 mb-3 pt-2 d-flex">

            <div id="gallery" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner imgs">
                    <div class="carousel-item active">
                        <div class="row">
                        @foreach($abonnements as $user)
                            <div class="col-md-2 text-center pt-n2" >
                                <img src="{{ $user->profile_photo_path }}" alt="" class="img-barre-main rounded-circle img-thumbnail " style="width:180px;height:70px">
                                <p><small>{{ $user->name }} </small></p>
                            </div>
                        @endforeach
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="row">
                        @foreach($abonnements2 as $user)
                            <div class="col-md-2 text-center pt-n2" >
                                <img src="{{ $user->profile_photo_path }}" alt="" class="img-barre-main rounded-circle img-thumbnail " style="width:180px;height:70px">
                                <p><small>{{ $user->name }} </small></p>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev  " href="#gallery" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only ">Previous</span>
                </a>

                <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>


        @foreach($tab as $key => $element)

        <div class="publication bg-white border mb-3">

            <div class="d-flex justify-content-between border" style="height:60px;">
                <div class="col-md-4 d-flex  ">
                    <img src=" {{ $element->user->profile_photo_path }} " alt="" class="rounded-circle mt-2" style="height:70%">
                    <p class="ml-3 mt-3"><small>{{ $element->user->name }}</small></p>
                </div>

                <div class="mr-3 ">
                    <a href=""><p class="text-dark" style="font-size:30px;">...</p></a>
                </div>
            </div>
        
            <div class="mb-2">
                <img src="{{ $element->photo }}" alt="" style="width:100%;height:35%">
            </div>


            <div class="d-flex justify-content-between ">
                <div class="col-md-2 d-flex justify-content-around ml-2 mt-1 " style="font-size:150%;">
                    <form id="formulaire_submit" action=" {{ route('cloneinstagram.ajout-like') }} " method="POST" class="d-flex ml-4 border-0 " >
                        @csrf

                        <input type="hidden" name="publication_id" value="{{$element->id}}" class="publication">

                        @if($changerStyle[$key] == 0)
                            <button  type="submit"  class="border bg-white border-white" style=" outline: none"><i id="style{{$element->id}}" class="far fa-heart  " style=" margin-left:15px;"></i></button>
                        @else
                            <button  type="submit"  class="border bg-white border-white" style=" outline: none"><i id="style{{$element->id}}" class="fas fa-heart " style=" margin-left:15px;"></i></button>
                        @endif

                        <i class="far fa-comment ml-2 mt-2" ></i>
                        <i class="far fa-paper-plane text-dark ml-3 mt-2" ></i>
                    </form>
                </div>

                <div class="col-md-1 mr-1" style="font-size:150%;">
                    <form action="{{ route('cloneinstagram.ajout-enregistre',[$element->id]) }}" method="POST">
                        @csrf
                        @if($element->enregistre=='0')
                            <button type="submit" class="border-0 bg-white "><i class="far fa-bookmark"></i></button>
                        @elseif($element->enregistre=='1')
                            <button type="submit" class="border-0 bg-white "><i class="fas fa-bookmark" ></i></button>
                        @endif
                    </form>
                </div>
            </div>

            <div class="col-md-4 ml-2">
                <p ><span id="{{$element->id}}">{{$element->likes->count()}}</span><span> J'aime </span> </p>
            </div>

            <div class="col-md-12 ">
                <div class="d-flex">
                    <p class=" ml-2 "><small class=" font-weight-bold">{{ $element->user->name }}</small> </p>
                    <p class="col-md-9 text-info" >{{ $element->description }}</p>
                </div>
                <div class="">
                    <p class="mt-n3 ml-2 " style="color:gray"><small>Afficher les {{  count($element->commentaires) }} commentaires</small> </p>
                </div>
                <div class="mt-n2 " style="line-height:0.4em">
                    @if(isset($element->commentaires) )
                        @foreach($element->commentaires as $comm)
                            <div class="d-flex " >
                                <p class=" ml-2 " style=""><small class=" font-weight-bold">{{ $comm->user->name }}</small> </p>
                                <p class="col-md-10 " style=" color:darkslategray">{{ $comm->contenu_comm }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>

            <div class="container col-md-12 border mt-2">
                <form action="{{ route('cloneinstagram.ajout-commentaire',[$element->id]) }}" method="POST" class=" ">
                    @csrf
                    <input type="text" name="commentaire"  placeholder="Ajouter un commentaire..." class="col-md-9 border-0" style="height:60px " >
                    <input type="submit" name="ajouter-commentaire" value="Publier" class="col-md-2 bg-white mt-3 text-info border-0 float-right font-weight-bold "  style="width:150px ">
                </form>
            </div>

        </div>

        @endforeach

    </div>

    <div class="position-fixed col-md-3 mt-5 border sidebar">

        <div class="container col-md-12 d-flex justify-content-between mt-4">
        <a href="{{ route('cloneinstagram.profil-admin') }}" class="col-md-3"><img src="{{ Auth::user()->profile_photo_path }}" alt="" class="rounded-circle"  style="height:80%; width:100%;"></a>

            <div class="container col-md-5 mt-3" style="">
                <a href="{{ route('cloneinstagram.profil-admin') }}"><p class="">{{ Auth::user()->name }}</p></a>
                <p class="text-dark mt-n3" style="font-size:0.85rem;">{{ Auth::user()->name }}</p>
            </div>

            <input type="submit" value="Basculer" name="basculer" class="container col-md-3 border-0 text-info bg-light float-right" style="font-size:0.75rem">
        </div>

        <div class="container col-md-10 d-flex justify-content-between mt-3 ">
            <p style="color:gray">Suggestions pour vous</p>
            <p><small>Voir tout</small></p>
        </div>

        @foreach($users as $user)
       
        <div class="container col-md-10 d-flex mt-2">
            
            <img src="{{ $user->profile_photo_path }}" alt="" class="col-md-3 rounded-circle" style="height:14%; width:12%;">
            
            <div class=" col-md-10 d-flex justify-content-between">
                <a href="{{ route('cloneinstagram.profil-user',[$user->id]) }}"><div class="container  mt-1" style="line-height:2px;font-size:0.9rem;" >
                    <p>{{ $user->name }}</p>
                    <p class="" style="font-size:0.85rem;color:gray"><small> Suivi(e) par: </small></p>
                </div></a>
            @foreach($tableau as $table)
                @if($table->id == $user->id)
                <a href="{{ route('cloneinstagram.supprimer-follower',[$user->id]) }}"><input type="submit" value="Désabonner" name="basculer" class="border-0 text-info bg-light float-right" style="font-size:0.75rem"></a>               
                @endif
            @endforeach

            </div>
        </div>
        
        @endforeach

               

        <div class="mt-3">

            <ul class="container col-md-12 d-flex justify-content-around flex-wrap list-unstyled" style="font-size:0.75rem;">
            <a href=""><li><small class=" " style="color:gray">A propos .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Aide .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Presse .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">API .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Emplois .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Confidentialité .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Conditions .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Lieux .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Comptes principaux .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Hashtags .</small></li></a>
            <a href=""><li><small class=" " style="color:gray">Langue</small></li></a>
            </ul>

            <div class="text-center col-md-12" style="color:gray">
                <small >© 2020 INSTAGRAM PAR FACEBOOK</small>
            </div>

        </div>

    </div>

</div>

@endsection
