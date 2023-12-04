

<div class="modal fade" id="editar{{ $proveedor->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar recuerdo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>{{-- cierra headar --}}

      <div class="modal-body">
        <form method="GET" action="/gestion/proveedor{{ $proveedor->id }}/confirm">
        @csrf

        <div class="mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="txtNombre" value="{{ $proveedor->txtNombrepro }}">
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtNombrepro')}}</strong></p>
                </div>
                <div class="mb-3">
                    <label for="cantidad">Cantidad:</label>
                    <input type="text" name="txtCantidad" class="form-control" id="cantidad" value="{{$proveedor->txtCorreo}}">
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtCorreo')}}</strong></p>
                </div>
                <div class="mb-3">
                    <label for="precio">Precio:</label>
                    <input type="text" name="txtPrecio" class="form-control" id="precio" value="{{$proveedor->txtTelefono}}">
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtTelefono')}}</strong></p>
                </div>

        </div>

        <div class="card-footer text-body-secondary">
            
      </div>{{-- cierra body --}}

      <div class="modal-footer">
      <div class="d-grip grap-2">
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </div>
        </form>
      </div>{{-- cierra fooder --}}

    </div>
  </div>
</div>

<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="eliminarProveedor{{ $proveedor->id }}" tabindex="-1" aria-labelledby="eliminarRecuerdoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarRecuerdoModalLabel">Eliminar recuerdo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que quieres eliminar este recuerdo?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('recuerdo.destroy', $recuerdo->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
