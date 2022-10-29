<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PedidoController;


Route::get('/', [PostController::class,'index'])->name('posts.index');
Route::get('/prueba',[PostController::class,'show']);
Route::resource('pedidos',PedidoController::class)->names('pedidos');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
