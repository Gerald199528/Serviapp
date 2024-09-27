
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">NUEVA CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">


            <form method="post" action="categories" class="register"  id="Nueva" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <label for="exampleFormControlTextarea1" class="form-label">Seleccione una categoria</label>



  <select class="form-select" name="nombre"  id="nombre" aria-label="Default select example" required>

    <option  selected disabled value="" >-----Selecciona una Opcion!!-----</option>
    <option value="Servicios">Servicios</option>
    <option value="Social">Social</option>
      <option value="Desastre Naturales">Desastre Naturales</option>

  </select>




<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Escribe una pequeña descripcion sobre la categoria seleccionada!!</label>
  <textarea class="form-control"  name="descripcion" value="{{ old('descripcion') }}"  placeholder="Descripcion"  id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
        </div>
        </div>
      </div>
    </div>
  </div>
