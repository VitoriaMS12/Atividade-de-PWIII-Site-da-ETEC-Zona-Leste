<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/Index', 'Index');// retornando a página de home (index)

Route::get('/', function () {
    return view('Index');
});

Route::get('/sobrenos', function() {
    return view('sobrenos');
});

Route::get('/cursos', function() {
    return view('cursos');
});

Route::get('/vestibulinho', function() {
    return view('vestibulinho');
});