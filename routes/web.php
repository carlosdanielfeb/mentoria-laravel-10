<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/mentoria', function(){
    return 'ola';
});


Route::get('/teste/{id}', function() {
    return 'certo';
});

Route::get('/teste/{token_usuario}', function() {
    return 'certo';
});