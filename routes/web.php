<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
RUTAS EN LARAVEL

primero tenemos el texto que sera la ruta y generamos un método anonimo
si necesitamos que tenga una variable la ruta se la agregamos con un {} y 
tambien se lo ponemos a la función anonima

EJEMPLOS
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', HomeController::class); 

Route::get('cursos', function () {
    return "hello world";
});

Route::get('cursos/create', function(){
    return "Crear cursos";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso:$curso";
});

//EJEMPLO PARA VARIOS PARAMETROS Y PARAMETROS OPCIONALES

/*
MÉTODO NORMAL
Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenido al curso: $curso con categoria $categoria";
});
*/
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
    if($categoria)
    return "Bienvenido al curso: $curso con categoria $categoria";
    else{
    return "Bienvenido al curso: $curso";
    }
});

