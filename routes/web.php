<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('saludo/{nombre}', function($name){
    echo "Hola ".$name;
});

Route::get('suma/{n1}/{n2}', function($n1, $n2){
    echo "La suma es: ".$n1+$n2;
})->where('n1', '[0-9]+')->where('n2', '[0-9]+');

Route::post('suma', function(Request $request){
    echo "La suma es: ".$n1+$n2;
});

Route::get('sumatoria/{n1}/{n2}/{n3?}', function($n1, $n2, $n3=0){
    echo "La suma es: ".$n1+$n2+$n3;
})->where('n1', '[0-9]+')->where('n2', '[0-9]+');

