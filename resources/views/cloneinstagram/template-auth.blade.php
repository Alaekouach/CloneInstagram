

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body class="bg-light">

    <header>
    

    </header>
    

    <main class="">

        <div class="container col-md-6">

            <div class="container col-md-6 mt-3 ">
                <div class="bg-white border" style="border-color:rgb(218,220,224)">
                    <h1 class="display-4 text-center mt-3 mb-3" style="font-family:billabong">Instagram</h1>

                    <div class="container col-md-11 text-center">
                        @yield('contenu1')
                    </div>

                    <div>
                        <small class="hr mt-3 mb-2"><strong class="text-secondary">OU </strong> </small>
                    </div>

                    <div class="container col-md-10">
                        @yield('contenu2')
                    </div>
                </div>
            </div>

            <div class="container col-md-6" >
                <div class="bg-white border mt-3 pt-4 pb-2 text-center" style="border-color:rgb(218,220,224)" >
                    @yield('contenu3')
                </div>
            </div>

            <div class="container col-md-6 mt-3 mb-3">
                <p class="text-center" style="font-size:0.9rem">Téléchargez l’application.</p>
            </div>

            <div class="container col-md-6 d-flex mt-2 mb-3 ">
                <a href=""><img class="ml-1" src="pictures\img-app-store.png" alt="" style="width:95%; height:50%"></a>
                <a href=""><img class="ml-2" src="pictures\img-google-play.png" alt="" style="width:95%; height:50%"></a>
            </div>
        </div>

    </main>


    <footer class="container col-md-11 d-flex justify-content-beetween">

        <ul class="container col-md-7 d-flex justify-content-around list-unstyled">
          <a href=""><li><small class="text-dark ">A PROPOS</small></li></a>
          <a href=""><li><small class="text-dark ">AIDE</small></li></a>
          <a href=""><li><small class="text-dark ">PRESSE</small></li></a>
          <a href=""><li><small class="text-dark ">API</small></li></a>
          <a href=""><li><small class="text-dark ">EMPLOIS</small></li></a>
          <a href=""><li><small class="text-dark ">CONFIDENTIALITE</small></li></a>
          <a href=""><li><small class="text-dark ">CONDITIONS</small></li></a>
          <a href=""><li><small class="text-dark ">LIEUX</small></li></a>
          <a href=""><li><small class="text-dark ">COMPTES PRINCIPAUX</small></li></a>
          <a href=""><li><small class="text-dark ">HASHTAGS</small></li></a>
          <a href=""><li><small class="text-dark ">LANGUE</small></li></a>
        </ul>

        <div class="container col-md-3 text-secondary">
            <small >© 2020 INSTAGRAM PAR FACEBOOK</small>
        </div>
    
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>