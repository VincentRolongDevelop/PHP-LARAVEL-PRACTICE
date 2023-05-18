<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cursocontroller;

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

Route::get('cursos', function () {
    return "hello world";
});

Route::get('cursos/create', function(){
    return "Crear cursos";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso:$curso";
});
*/

//EJEMPLO PARA VARIOS PARAMETROS Y PARAMETROS OPCIONALES

/*
MÉTODO NORMAL

Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenido al curso: $curso con categoria $categoria";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
    if($categoria)
    return "Bienvenido al curso: $curso con categoria $categoria";
    else{
    return "Bienvenido al curso: $curso";
    }
});

ABAJO VEREMOS COMO SE USA EN WEB PERO CON UN CONTROLADOR
*/

//USO DE RUTAS SIN EL GRUPO DE RUTAS, ES DECIR QUE CADA UNA USAR EL CONTROLADOR NECESARIO PERO CON UN MÉTODO DE RUTAS DIFERENTE
//PODEMOS HACER QUE SEA MAS SIMPLE LLAMADA GRUPO DE RUTAS, AHORA VEREMOS UN EJEMPLO DE EL NO USO DE LOS GRUPOS DE RUTAS

Route::get('/', HomeController::class); 

/*

Route::get('cursos', [Cursocontroller::class,'index']);
Route::get('cursos/create', [Cursocontroller::class,'create']);
Route::get('cursos/{curso}', [Cursocontroller::class,'show']);

*/
//GRUPOS DE RUTAS

Route::controller(Cursocontroller::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});



