<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios/{id}', function ($id) {
    return 'Obteneiendo id: ' . $id;
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Hola Amigos: $name con su nickname: $nickname";
    } else {
        return "Hola amigos $name, sin nickname";
    }
});
