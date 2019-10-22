<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ControllerCliente;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('clientes', [ControllerCliente::class, 'index'])->name('clientes');



// Clientes route
Route::post('clientes/guardar', [ControllerCliente::class, 'store'])->name('clientes.guardar');
Route::get('clientes/crear', [ControllerCliente::class, 'create'])->name('clientes.crear');
Route::delete('clientes/{cod_cliente}', [ControllerCliente::class, 'destroy'])->name('clientes.eliminar');
Route::get('clientes/{cod_cliente}', [ControllerCliente::class, 'show'])->name('clientes.ver');
Route::get('clientes/{cod_cliente}/editar', [ControllerCliente::class, 'edit'])->name('clientes.editar');
Route::post('clientes/{cod_cliente}', [ControllerCliente::class, 'update'])->name('clientes.update');