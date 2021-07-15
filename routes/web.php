<?php

use Illuminate\Support\Facades\Route;


// dans un nouveau projet : laravel_controller_exo_3
// -integration d'un template multi-page. Toutes les données du sites doivent faire partie d'une variable objet qui sont renvoyées dans des views
// -Un controller par view
// -utilisation des templates ( template,yield, etc.. )
// -nom du repo : laravel_multipage_controller

Route::get('/', function () {
    return view('template/index');
});
