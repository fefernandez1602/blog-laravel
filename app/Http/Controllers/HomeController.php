<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //Solo se usa cuando el controlador tendra un unico metodo
        return view('home');
    }
}
