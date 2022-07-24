<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PerfilController;
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
    return view('Home');
});

route::get('/login',[SessionController::class,'create'])->name('login.index');
route::post('/login',[SessionController::class,'store'])->name('login.store');
route::get('/register',[RegisterController::class,'create'])->name('register.index');
route::post('/register',[RegisterController::class,'store'])->name('register.store');
route::get('/logout',[SessionController::class,'destroy'])->name('logout.index');

route::get('/perfil',[PerfilController::class,'index'])->name('perfil.index');

route::get('/buscar',[SearchController::class,'index'])->name('search.index');
route::post('/buscar',[SearchController::class,'store'])->name('search.store');

Route::get('/nosotros', function () {
    return view('Nosotros');
});
Route::get('/contacto', function () {
    return view('Contacto');
});
Route::get('/inicio', function () {
    return view('Inicio');
});
