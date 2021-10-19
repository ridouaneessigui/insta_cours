# Laravel Insta V 7.*
---------------------
## installation
 composer
## config
 - local host 
  ![img](config1.JPG)
 - Apres 
    ``` sys32\drivers\hosts ```
##### web.php
``` PHP
Route::get('/apropos/{nom}/{id}', function ($nom,$id) {
    // return view('welcome'); //resources/views/welcome.blade.php
    return '<h1>mon nom est '.$nom.' et mon id est '.$id.'</h1>';
 });
```
![img2](Ajouter_des_pages_manuelle.JPG)


``` console
foo@bar:~$php artisan make:controller PagesController
```
``` PHP
#ETAPE 1 dans web.php
Route::get('/service', 'PagesController@service');
Route::get('/home', 'PagesController@home');
Route::get('/apropos', 'PagesController@apropos');
#ETAPE 2 dans pagecontroller
class PagesController extends Controller
{
    public function service () {
    return view('pages.service');
        }

        public function apropos () {
            return view('pages.apropos');
                }
        public function home () {
          return view('pages.home');
                 }                
}
```
 - ######  Blade Templates

``` PHP
#Etape 1
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 7.X</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
    @include ('inc.navbar')
    <div class="container">
    @yield('contenu')
    </div>

</body>
</html>

#ETAPE 2
 @include ('Layouts.app')
<div class="jumbotron">
    <h1>Welcome to the laravel 7.X project</h1>
</div>
#ou bien
@extends ('Layouts.app')

@section('contenu')
 <div class="jumbotron">
    <h1>Welcome to the laravel 7.X project</h1>
 </div>
@endsection

#####app.blade.php
<title>@yield('titre')</title>
####Home.blade.php
@section('titre')
    Home
@endsection
```
- ###### LA CREATION D UNE BASE DE DONNEE
![img3](cree.JPG)

- ###### creation model

```console 
foo@bar:~$php artisan make:model Produit -m
```
- ###### fixe chaine de caractere
![img3](fixe.JPG)

```console 
foo@bar:~$php artisan migrate
```


## Tinker pour les interfaces graphique

- ###### Ajouter dans les columns
```console 
PS C:\xampp\htdocs\Cours> php artisan tinker       
Psy Shell v0.10.9 (PHP 7.4.9 — cli) by Justin Hileman
=> 0
>>> $produit = new App\Produit();
=> App\Produit {#4278}
>>> $produit ->produit_prix = 120
=> 120
>>> $produit ->save();
=> true
>>>
```


