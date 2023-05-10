<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursocontroller extends Controller
{
    public function index(){
        return "hello world";
    }

    public function create(){
        return "Crear cursos";
    }
    public function show($curso){
        return "Bienvenido al curso:$curso";
    }
}
