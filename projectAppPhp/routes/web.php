<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\QuestionsController;
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
/*rutas sin funciones*/
Route::get('/', function () {
    return view('Home');
});
Route::get('/nosotros', function () {
    return view('Nosotros');
});
Route::get('/contacto', function () {
    return view('Contacto');
});
/*rutas con funciones*/
route::get('/login',[SessionController::class,'create'])->name('login.index');
route::post('/login',[SessionController::class,'store'])->name('login.store');
route::get('/register',[RegisterController::class,'create'])->name('register.index');
route::post('/register',[RegisterController::class,'store'])->name('register.store');
route::get('/logout',[SessionController::class,'destroy'])->name('logout.index');
route::get('/perfil',[PerfilController::class,'create'])->name('perfil.index');

route::get('/questions',[QuestionsController::class,'create'])->name('questions.index');
route::get('/buscar',[SearchController::class,'buscarUsuario'])->name('search.index');
route::get('Usuario/{id_user}',[PerfilController::class,'show'])->name('perfil.show');

Route::get('/blog-1', function () {
    return view('blogs.blog1');
});
Route::get('/blog-2', function () {
    return view('blogs.blog2');
});
Route::get('/blog-3', function () {
    return view('blogs.blog3');
});
Route::get('/blog-4', function () {
    return view('blogs.blog4');
});
Route::get('/blog-5', function () {
    return view('blogs.blog5');
});
