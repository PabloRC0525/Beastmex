<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeastmexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(BeastmexController ::class)->group(function(){

    Route::get('/login', 'metodoLogin')->name('apodoLogin');
    Route::get('/Aregistro', 'metodoAlmacen')->name('apodoARegistro');
    Route::get('/editar', 'metodoEditar')->name('apodoEditar');
}
);

Route::get('/',[BeastmexController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/Aconsultas',[BeastmexController::class, 'metodoAconsultas'])->name('apodoAconsultas');
Route::get('/Cgestion',[BeastmexController::class, 'metodoCgestion'])->name('apodoCgestion');
Route::get('/Vconsulta',[BeastmexController::class, 'metodoVconsulta'])->name('apodoVconsulta');
Route::get('/compras', [CompraController::class, 'index'])->name('apodocompras');
Route::get('/consultacompras', [CompraController::class, 'index'])->name('consultacompras');
Route::post('/consultacompras', [CompraController::class, 'buscar'])->name('buscar-compras');
Route::get('/ordenes-compra', [OrdenCompraController::class, 'formulario'])->name('ordenes-compra');
Route::post('/ordenes-compra/guardar', [OrdenCompraController::class, 'guardar'])->name('guardar-orden');
Route::get('/historial-ordenes', [OrdenCompraController::class, 'buscar'])->name('buscar-ordenes');
Route::get('/descargar-orden/{id}', [OrdenCompraController::class, 'descargar'])->name('descargar-orden');