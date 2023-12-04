<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeastmexController;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\Ganancias;
use App\Http\Controllers\Vcomprasventas;

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


/*RUTAS DE ALAN INICAN gerencias */
#RUTAS VIEJAS
#Route::get('/Gusuarios', [BeastmexController::class, 'metodoGusuario'])->name('gusuarios');
#Route::post('/guardarusuario', [BeastmexController::class, 'guardarusuario'])->name('guardarusuario');



Route::get('/Gusuarios/create', [ControllerAdmin::class, 'create'])->name('Gusuarios.create');
Route::post('/Gusuarios', [ControllerAdmin::class,'store'])->name('Gusuario.store');
Route::get('/Gusuarioss', [ControllerAdmin::class, 'index'])->name('Gusuarioss.index');

/*gerencias ventas,compras y ganancias*/

Route::get('/Ganancias', [Ganancias::class, 'informes'])->name('Ganancias.informes');
Route::get('/Vgerencia', [Vcomprasventas::class, 'mostrarCompras'])->name('Ganancias.mostrarCompras');





#RUTAS DE ALAN ACABAN

Route::get('/compras', [BeastmexController::class, 'index'])->name('apodocompras');
Route::get('/consultacompras', [BeastmexController::class, 'index'])->name('consultacompras');
Route::post('/consultacompras', [BeastmexController::class, 'buscar'])->name('buscar-compras');
Route::get('/ordenes-compra', [BeastmexController::class, 'formulario'])->name('ordenes-compra');
Route::post('/ordenes-compra/guardar', [BeastmexController::class, 'guardar'])->name('guardar-orden');
Route::get('/historial-ordenes', [BeastmexController::class, 'buscar'])->name('buscar-ordenes');
Route::get('/descargar-orden/{id}', [BeastmexController::class, 'descargar'])->name('descargar-orden');

Route::post('/AgregarProducto',[BeastmexController::class, 'metodoAgregarP']) ->name('AgregarP');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
