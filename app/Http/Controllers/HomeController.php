<?php

//Es decir el donde se guarda el archivo
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Los controladores son para generar metodos que permitan el manejar las rutas de nuestra pagina sin tanto problemas
class HomeController extends Controller
{
    //{
    public function __invoke(){
        return 'Hola mundos';
    }
}
