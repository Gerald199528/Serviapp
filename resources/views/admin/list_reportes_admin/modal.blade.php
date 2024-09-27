<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $reporteId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Estatus del Reporte Generado</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="post" action="{{ route('reportes.update', $reporteId) }}" id="reporteId">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <select class="form-select" name="estatus" aria-label="Default select example" required>
                    <option value="" disabled selected>Seleccione una Opción</option>
                      <option value="procesado">Procesar</option>
                      <option value="cancelado">Cancelar</option>
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