<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido a la pagina principal";
});

Route::get('/posts', function () {
    return "Aqui se mostaran todos los posts";
});

Route::get('/posts/create', function () { //Enrutado de contenido variable
    return "Aqui se mostara un formulario para crear un post";
});

Route::get('/posts/{post}', function ($post) { //Enrutado de contenido variable
    return "Aqui se mostara el post {$post}";
});

#Route::get('/posts/{post}/{category}', function ($post,$category = null) { //Enrutado de contenido variable
    
#    if($category){
#        return "Aqui se mostara el post {$post} de la categoria {$category}";
#    }else{
#        return "Aqui se mostara el post {$post}";
#    }
#});

#Route::get('/posts/{post}/{category}', function ($post,$category) { //Enrutado de contenido variable
#    return "Aqui se mostara el post {$post} de la categoria {$category}";
#});

//Get - Obtener pagina
//Post - Publicar/Mandar informacion
//Put/path - Actualizar registro
//Delete - Borrar registro