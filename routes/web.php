<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido a la pagina principal";
});

Route::get('/posts', function () {
    return "Aqui se mostaran todos los posts";
});

Route::get('/posts/{post}', function ($post) { //Enrutado variable
    return "Aqui se mostara el post {$post}";
});

//Get - Obtener pagina
//Post - Publicar/Mandar informacion
//Put/path - Actualizar registro
//Delete - Borrar registro