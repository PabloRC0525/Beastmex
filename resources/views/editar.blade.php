@extends('layouts.template')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="display-1 text-center text-danger mt-5">Editar Productos</h3>
                <div class="card-body">
                
                        @csrf
                        <label for="nombre">{{ __('Id del producto:') }}</label>
                        <input id="nombre" type="text" class="form-control" name="nombre" required>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Buscar Producto') }}
                            </button>
                        </div>

                        <label for="nombre">{{ __('Nombre del Producto') }}</label>
                        <input id="nombre" type="text" class="form-control" name="nombre" required>

                        <label for="numero_serie">{{ __('Número de Serie') }}</label>
                        <input id="numero_serie" type="text" class="form-control" name="numero_serie" required>

                        <label for="marca">{{ __('Marca') }}</label>
                        <input id="marca" type="text" class="form-control" name="marca" required>

                        <label for="cantidad">{{ __('Cantidad') }}</label>
                        <input id="cantidad" type="number" class="form-control" name="cantidad" required>

                        <label for="costo_compra">{{ __('Costo de Compra') }}</label>
                        <input id="costo_compra" type="number" step="0.01" class="form-control" name="costo_compra" required>

                        <label for="precio_venta">{{ __('Precio de Venta') }}</label>
                        <input id="precio_venta" type="number" step="0.01" class="form-control" name="precio_venta" required>

                        <label for="fecha_ingreso">{{ __('Fecha de Ingreso') }}</label>
                        <input id="fecha_ingreso" type="date" class="form-control" name="fecha_ingreso" required>

                        <label for="foto">{{ __('Fotografía') }}</label>
                        <input id="foto" type="file" class="form-control" name="foto">

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar Producto') }}
                            </button>
                        </div>

                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
