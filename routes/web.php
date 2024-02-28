<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $comics = config ('comics');
   

    return view('welcome', [
        'comics' => $comics
    ]);
    
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});


