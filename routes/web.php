<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\CarritoController;


Route::get('/', [PostController::class, 'welcome']
);
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('pedidos/{pedido}',[PedidoController::class ,'show'])->name('pedidos.show');
Route::get('/productos', [PostController::class, 'index'])->name('productos.index');
Route::get('productos/{producto}',[PostController::class ,'show'])->name('productos.show');
Route::get('/agregarproducto', [CarritoController::class, 'agregarItem'])->name('agregaritem');
Route::get('/incrmentar/{id}', [CarritoController::class, 'incrmentQty'])->name('incrmentqty');
Route::get('/decrementar/{id}', [CarritoController::class, 'decrementaQty'])->name('decrementaQty');
Route::get('/eliminar/{id}', [CarritoController::class, 'eliminarItem'])->name('eliminarItem');
Route::get('/eliminarCarrito', [CarritoController::class, 'eliminarCarrito'])->name('eliminarCarrito');
Route::get('/ConfirmarCarrito', [CarritoController::class, 'ConfirmarCarrito'])->name('ConfirmarCarrito');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
});
