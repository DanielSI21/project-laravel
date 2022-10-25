<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

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

//Actividad 3
/*
Route::get('saludo/{nombre}', function($name){
    echo "Hola ".$name;
});

Route::get('suma/{n1}/{n2}', function($n1, $n2){
    echo "La suma es: ".$n1+$n2;
})->where('n1', '[0-9]+')->where('n2', '[0-9]+');

Route::post('suma', function(Request $request){
    echo "La suma es: ".$request->n1+$request->n2;
});

Route::get('sumatoria/{n1}/{n2}/{n3?}', function($n1, $n2, $n3=0){
    echo "La suma es: ".$n1+$n2+$n3;
})->where('n1', '[0-9]+')->where('n2', '[0-9]+');
*/

//usuarios
Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::put('users', [UserController::class, 'update'])->name('users.update');
Route::delete('users', [UserController::class, 'destroy'])->name('users.destroy');

//clients
Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::post('clients', [ClientController::class, 'store'])->name('clients.store');
Route::put('clients', [ClientController::class, 'update'])->name('clients.update');
Route::delete('clients', [ClientController::class, 'destroy'])->name('clients.destroy');

