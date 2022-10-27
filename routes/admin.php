<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\PedidosController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('productos', ProductoController::class)->names('admin.productos');
Route::resource('pedidos', PedidosController::class)->names('admin.pedidos');
