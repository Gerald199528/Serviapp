
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Seleccione Nivel de privilegio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('privilegio.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <select class="form-select" name="privilegio" for="privilegio" aria-label="Default select example" required>
                        <option value="" disabled selected>Seleccione una Opción</option>
                        <option value="super_administrador">Super Administrador</option>
                        <option value="usuario">Usuario</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
            </form>
        </div>
    </div>
</div>
  