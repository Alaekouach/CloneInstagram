<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Routes pour les views d'authentification

Route::get('inscription',[
    'uses'=>'AuthController@inscription',
    'as'=> 'cloneinstagram.inscription'
]);

Route::get('index',[
    'uses'=>'AuthController@index',
    'as'=> 'cloneinstagram.index'
]);

// Route pour le logout

Route::get('logout',[
    'uses'=>'AuthController@logout',
    'as'=> 'cloneinstagram.logout'
]);

Route::get('session',[
    'uses'=>'AuthController@session',
    'as'=> 'cloneinstagram.session'
]);




// Routes pour la view d'accueil

Route::get('accueil',[
    'uses'=>'AccueilController@accueil',
    'as'=> 'cloneinstagram.accueil'
])->middleware('auth');

// Routes pour les views des profils

Route::get('profil-admin',[
    'uses'=>'ProfilController@profil_admin',
    'as'=> 'cloneinstagram.profil-admin'
]);

Route::get('profil-user/{id}',[
    'uses'=>'ProfilController@profil_user',
    'as'=> 'cloneinstagram.profil-user'
]);

Route::get('modifier-profil',[
    'uses'=>'ProfilController@modifier_profil',
    'as'=> 'cloneinstagram.modifier-profil'
]);

Route::post('change-profil',[
    'uses'=>'ProfilController@change_profil',
    'as'=> 'cloneinstagram.change-profil'
]);

// Routes pour ajouter un follower

Route::get('ajout-follower/{id}',[
    'uses'=>'ProfilController@ajout_follower',
    'as'=> 'cloneinstagram.ajout-follower'
]);

Route::get('supprimer-follower/{id}',[
    'uses'=>'ProfilController@supprimer_follower',
    'as'=> 'cloneinstagram.supprimer-follower'
]);




// Routes pour l'ajout des publications

Route::POST('ajout-publication',[
    'uses'=>'PublicationController@ajout_publication',
    'as'=> 'cloneinstagram.ajout-publication'
]);


//Route pour l'ajout des commentaires

Route::POST('ajout-commentaire/{id}',[
    'uses'=>'CommentaireController@ajout_commentaire',
    'as'=> 'cloneinstagram.ajout-commentaire'
]);



//Route pour l'ajout des likes

Route::POST('ajout-like/',[
    'uses'=>'LikeController@ajout_like',
    'as'=> 'cloneinstagram.ajout-like'
]);

//Route pour enregistrer une publication

Route::get('enregistrement-profil',[
    'uses'=>'ProfilController@enregistrement_profil',
    'as'=> 'cloneinstagram.enregistrement-profil'
]);


Route::POST('ajout-enregistre/{id}',[
    'uses'=>'ProfilController@ajout_enregistre',
    'as'=> 'cloneinstagram.ajout-enregistre'
]);


