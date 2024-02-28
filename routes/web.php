<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $comics = config ('comics');
   dd($comics);

    return view('welcome', [
          
    ]);
    
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});


