
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">NUEVA CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">


            <form  action="{{route('subcategories.store')}}"   method="POST" id="uses"  class="row g-3 needs-validation" >
@csrf

                <label for="exampleFormControlTextarea1" class="form-label">Seleccione una categoria</label>


@foreach ($categories as $category)


  <select class="form-select" name="nombre"  id="nombre" aria-label="Default select example" required>

    <option  selected disabled value="" >-----Selecciona una Opcion!!-----</option>
    <option value="{{$category->id}}">{{$category->nombre}}</option>

    @endforeach

  </select>


<input type="text" name="nombre" for="nombre">
<input type="text" name="tipo" for="tipo">

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
        </div>
        </div>
      </div>
    </div>
  </div>
