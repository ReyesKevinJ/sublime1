<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\pedidosController;
Route::get('/', [PostController::class, 'welcome'] 
);
Route::get('/pedidos', [pedidosController::class, 'index'])->name('pedidos.index');
Route::get('pedidos/{pedido}',[pedidosController::class ,'show'])->name('pedidos.show');
Route::get('/productos', [PostController::class, 'index'])->name('productos.index');
Route::get('productos/{producto}',[PostController::class ,'show'])->name('productos.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/pedidos', [pedidosController::class, 'index'])->name('pedidos.index');
});
