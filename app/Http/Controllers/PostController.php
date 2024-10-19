<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui se mostaran todos los posts";
    }

    public function create(){
        return "Aqui se mostara un formulario para crear un post";
    }

    public function show($post){
        return "Aqui se mostara el post {$post}";
    }
}
