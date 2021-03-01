<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/template2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>

<body class="bg-light">


<header class="fixed-top bg-white border">

    <div class="container col-md-8 d-flex " style="height:50px;">

        <div class="col-md-4">
        <a href="{{ route('cloneinstagram.accueil') }}"><h2 class="display-5 mt-2" style="font-family:billabong">Instagram </h2></a>
        </div>

        <div class="container col-md-4">
            <i class="fas fa-search bg-light icon-search"></i>
            <input type="search" class="bg-light border barre" placeholder="Rechercher">
        </div>

        <div class="col-md-3 d-flex justify-content-around ml-2 icons" >
                <a href="{{ route('cloneinstagram.accueil') }}"><i class="fas fa-home text-dark"></i></a>
                <a href=""><i class="far fa-paper-plane text-dark"></i></a>
                <a href=""><i class="fas fa-info-circle text-dark"></i></a>
                <a href=""><i class="far fa-heart text-dark"></i></a>
                <div class="dropdown  ">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none">
                        <i class="fas fa-user-circle icon-user "></i>
                    </a>

                    <div class="dropdown-menu " id="menu-toggle" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('cloneinstagram.profil-admin') }}" style="font-size:0.9rem;"><i class="far fa-user-circle mr-2"></i> Profil </a>
                        <a class="dropdown-item" href="{{ route('cloneinstagram.enregistrement-profil') }}" style="font-size:0.9rem;"><i class="far fa-bookmark mr-2"></i> Enregistré </a>
                        <a class="dropdown-item" href="{{ route('cloneinstagram.modifier-profil') }}" style="font-size:0.9rem;"><i class="fas fa-cog mr-2"></i> Paramètres</a>
                        <a class="dropdown-item" href="{{ route('cloneinstagram.session') }}" style="font-size:0.9rem;"><i class="fas fa-sync-alt mr-2"></i> Changer de compte</a>
                        <hr>
                        <a class="dropdown-item mt-n2" href="{{ route('cloneinstagram.logout') }}" style="font-size:0.9rem;">Déconnexion</a>
                    </div>
                </div>
        </div>
    </div>
    

</header>


<main class="container col-md-8 mt-5 pt-2">

    <div class="col-md-10 d-flex mt-4">
        @yield('main_profil_user')
    </div>

    <div>
        @yield('contenu1')
    </div>
   

    <div class="mt-5">
        <hr style="color:gray">
    </div>

    <div class="container col-md-8 d-flex">
        <div class="m-auto d-flex col-md-3 ">
            <a href="{{ route('cloneinstagram.profil-admin') }}"><img src="..\pictures\icons\matrice.png" alt="" style="width:12px; height:12px" class="mr-1 ">
            <label for="" class="text-dark" style="color:gray;font-size:0.8rem">PUBLICATIONS</label></a>
        </div>

        <div class="m-auto d-flex col-md-2 ">
            <a href=""><img src="..\pictures\icons\igtv.png" alt="" style="width:12px; height:12px" class="mr-1 ">
            <label for="" style="color:grey;font-size:0.8rem">IGTV</label></a>
        </div>

        <div class="m-auto d-flex col-md-3 ">
            <a href=""><img src="..\pictures\icons\bookmark.svg" alt="" style="width:12px; height:12px" class="mr-1 ">
            <label for="" style="color:grey;font-size:0.8rem">ENREGISTREMENTS</label></a>
        </div>

        <div class="m-auto d-flex col-md-3 ">
            <a href=""><img src="..\pictures\icons\user.png" alt="" style="width:12px; height:12px" class="mr-1 ">
            <label for="" style="color:grey;font-size:0.8rem">IDENTIFIÉ(E)</label></a>
        </div>
    </div>

    <div>
        @yield('contenu2')
    </div>



    
</main>



<footer class="container col-md-11 d-flex justify-content-beetween mt-3">

        <ul class="container col-md-7 d-flex justify-content-around list-unstyled" style="color:mediumblue">
          <a href=""><li><small >A PROPOS</small></li></a>
          <a href=""><li><small >AIDE</small></li></a>
          <a href=""><li><small >PRESSE</small></li></a>
          <a href=""><li><small >API</small></li></a>
          <a href=""><li><small >EMPLOIS</small></li></a>
          <a href=""><li><small >CONFIDENTIALITE</small></li></a>
          <a href=""><li><small >CONDITIONS</small></li></a>
          <a href=""><li><small >LIEUX</small></li></a>
          <a href=""><li><small >COMPTES PRINCIPAUX</small></li></a>
          <a href=""><li><small >HASHTAGS</small></li></a>
          <a href=""><li><small >LANGUE</small></li></a>
        </ul>

        <div class="container col-md-3 text-secondary">
            <small >© 2020 INSTAGRAM PAR FACEBOOK</small>
        </div>
    
    </footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<!-- <script src="{{ asset('js/jquery.js') }}"></script>  -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/popup.js') }}"></script>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>
</html>


