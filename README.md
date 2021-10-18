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
    // return view('welcome');
    return '<h1>mon nom est '.$nom.' et mon id est '.$id.'</h1>';
 }); ```
