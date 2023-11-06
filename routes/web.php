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


/*gerencias */
Route::get('/Gusuarios', [BeastmexController::class, 'metodoGusuario'])->name('gusuarios');
Route::post('/guardarusuario', [BeastmexController::class, 'guardarusuario'])->name('guardarusuario');

/*gerencias ventas,compras y ganancias*/
Route::get('/Vgerencia', [BeastmexController::class, 'metodoVgerencia'])->name('vgerencia');
Route::get('/Ganancias', [BeastmexController::class, 'metodoGanancias'])->name('ganancias');

Route::get('/compras', [BeastmexController::class, 'index'])->name('apodocompras');
Route::get('/consultacompras', [BeastmexController::class, 'index'])->name('consultacompras');
Route::post('/consultacompras', [BeastmexController::class, 'buscar'])->name('buscar-compras');
Route::get('/ordenes-compra', [BeastmexController::class, 'formulario'])->name('ordenes-compra');
Route::post('/ordenes-compra/guardar', [BeastmexController::class, 'guardar'])->name('guardar-orden');
Route::get('/historial-ordenes', [BeastmexController::class, 'buscar'])->name('buscar-ordenes');
Route::get('/descargar-orden/{id}', [BeastmexController::class, 'descargar'])->name('descargar-orden');

Route::post('/AgregarProducto',[BeastmexController::class, 'metodoAgregarP']) ->name('AgregarP');

