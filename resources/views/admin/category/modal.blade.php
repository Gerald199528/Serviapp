
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">NUEVA CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">


            <form method="post" action="categories" class="register"  id="Nueva" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

<br>
<label  class="form-label"> Indique el tipo de Categoría </label>
<input class="form-control" for="nombre_tipo" name="nombre_tipo" >
  
  <br>

  <label  class="form-label">Nombre de Categoría</label>
  <input class="form-control" for="nombre_categories" name="nombre_categories" >
  <br>
  <label  class="form-label"> Nombre de Subcategoría</label>
  <input class="form-control" for="nombre_subcategories" name="nombre_subcategories" >

<br>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción de la categoría</label>
  <textarea class="form-control"  name="descripcion" value="{{ old('descripcion') }}"  placeholder="Descripción"  id="exampleFormControlTextarea1" rows="3" required></textarea>
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
