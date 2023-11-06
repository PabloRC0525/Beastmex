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
Route::get('/Pventas',[BeastmexController::class, 'metodoPventas'])->name('apodoPventas');
Route::get('/Graficas',[BeastmexController::class, 'Graficas'])->name('Graficas  ');
Route::get('/compras', [BeastmexController::class, 'index'])->name('apodocompras');
Route::get('/Cconsulta',[BeastmexController::class, 'metodoConsulta'])->name('Ccompras');
Route::post('/consultacompras', [BeastmexController::class, 'buscar'])->name('buscar-compras');
Route::get('/ordenes-compra', [BeastmexController::class, 'formulario'])->name('ordenes-compra');
Route::post('/ordenes-compra/guardar', [BeastmexController::class, 'guardar'])->name('guardar-orden');
Route::get('/ordenes', [BeastmexController::class, 'metodoOrden'])->name('apodoOrden');
Route::get('/descargar-orden/{id}', [BeastmexController::class, 'descargar'])->name('descargar-orden');

Route::post('/AgregarProducto',[BeastmexController::class, 'metodoAgregarP']) ->name('AgregarP');

