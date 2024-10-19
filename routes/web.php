<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//Ruta asignada a un controlador
Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, "index"]);

Route::get('/posts/create', [PostController::class, "create"]);

Route::get('/posts/{post}', [PostController::class, "show"]); //Enrutado variable

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