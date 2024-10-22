<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Ruta asignada a un controlador
Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, "index"]);

Route::get('/posts/create', [PostController::class, "create"]);

Route::post('/posts', [PostController::class, "store"]);

Route::get('/posts/{post}', [PostController::class, "show"]); //Enrutado variable 

Route::get('/posts/{post}/edit', [PostController::class, "edit"]);

Route::put('posts/{post}', [PostController::class, "update"]);

Route::delete('posts/{post}', [PostController::class, "delete"]);

Route::get('prueba', function(){
    
    //Insertar datos en la tabla de Posts

    /* $post = new Post;

    $post->title = 'TitTuLo DE prueBA 4';
    $post->content = 'Contenido de prueba 4';
    $post->categoria = 'Categoria de prueba 4';

    $post->save();

    return $post; */

    //Buscar un post por id

    /* $post = Post::find(4);

    return $post;
 */
    
    //Buscar post por title y actualizar registro

    /* $post = Post::where('title', 'Titulo de prueba 1')
                 ->first();

    $post->categoria = 'Desarrollo web';

    $post->save();

    return $post; */

    //Recuperar más de un registro

    /* $posts = Post::all();

    return $posts; */

    //Recuperar más de un registro con where

    /* $posts = Post::where('id','>=','2')
                    ->get();

    return $posts; */

    //Recuperar más de un registro con order by

    /* $posts = Post::orderBy('title','asc')
                    ->select('id','title','categoria')
                    ->take(2)
                    ->get();

    return $posts; */

    //Eliminar un registro

    /* $posts = Post::find(1);
    $posts->delete();

    return "Se elimino correctamente!!"; */

    //Casting

    $post = Post::find(1);

    dd($post->is_active);

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