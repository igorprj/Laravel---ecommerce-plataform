<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\ProductController;

Route::middleware('auth')->group(function () {
    

Route::get('/Produtos/criarprodutos',[EventController::class, 'create'])->name('create');
Route::post('/welcome', [EventController::class, "store"]);

Route::get('/produtos',[EventController::class, 'produtos']);

Route::get('/FAQs',[EventController::class, 'FAQs'])->name('faq');

Route::get('Produtos/{id}', [EventController::class, 'show']);

Route::get('/sobre', [EventController::class, 'sobre']);


Route::get('sobre', [EventController::class, 'sobre']);

Route::get('/',[EventController::class, 'index'])->name('home');
});

Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::post('/login',[AuthController::class, 'login']);

Route::get('/cadastro', [AuthController::class, 'showCadastro'])->name('cadastro');
Route::post('/cadastro', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/search', [ProductController::class, 'search'])->name('products.search');

