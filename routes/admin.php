<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\PedidosController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\TamañoController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::resource('productos', ProductoController::class)->names('admin.productos')->middleware('can:admin.home');
Route::resource('pedidos', PedidosController::class)->names('admin.pedidos')->middleware('can:admin.home');
Route::resource('users',UserController::class)->only('index','edit','update')->middleware('can:admin.home')->names('admin.users');
Route::resource('colores', ColorController::class)->names('admin.colores')->middleware('can:admin.home');
Route::resource('tamaños', TamañoController::class)->names('admin.tamaños')->middleware('can:admin.home');

