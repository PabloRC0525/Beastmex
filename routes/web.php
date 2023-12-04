<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// rutas de myriam

Route::get('/ordenes-compra', [OrdenCompraController::class, 'formulario'])->name('ordenes-compra');
Route::post('/ordenes-compra/guardar', [OrdenCompraController::class, 'guardar'])->name('guardar-orden');
Route::get('/descargar-orden/{id}', [OrdenCompraController::class, 'descargar'])->name('descargar-orden');

use App\Http\Controllers\CompraController;

Route::get('/compras', [CompraController::class, 'index'])->name('comprasindex');

Route::post('/agregarCompra', [CompraController::class, 'agregarCompra'])->name('agregarCompra');

Route::get('/compras/consultar', [CompraController::class, 'consultarCompras'])->name('Ccompras');
Route::get('/consultar-compras/{nombreProducto}', [CompraController::class, 'consultarComprasPorProducto'])->name('consultar.compras.producto');
Route::get('/compras', [CompraController::class, 'index'])->name('apodocompras');
Route::post('/consultacompras', [CompraController::class, 'buscar'])->name('buscar-compras');


use App\Http\Controllers\GestionController;

Route::get('/gestion/productos', [GestionController::class, 'productos'])->name('gestion.productos');
Route::get('/gestion/proveedores', [GestionController::class, 'proveedores'])->name('gestion.proveedores');
Route::get('/gestion/opciones-compra', [GestionController::class, 'opcionesCompra'])->name('gestion.opcionesCompra');

use App\Http\Controllers\ProveedorCrud;
Route::get('gestion/proveedores', [ProveedorCrud::class, 'index'])->name('proveedores.index');
Route::get('/eliminar/{id}', [CompraController::class,'eliminar'])->name('eliminar.proveedor');
Route::get('/gestion/proveedor{{id}}/confirm', [CompraController::class,'update'])->name('editar.proveedor');