

<!-- Modal -->
<div class="modal fade" id="editeModal{{$category->id}}" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">PERMISOS PARA EDITAR DESCRIPCION </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!!Form::model($category,['route'=>['categories.update',$category->id ],'method'=>'PUT']) !!}
           {{ csrf_field()}}


           <div class="mb-3">
            <label for="descripcion" class="form-label">Categoria Actual.</label>
          <input class="form-control"  type="text" id="nombre" name="nombre"   value="{{$category->nombre}}"  aria-label="default input example" readonly="readonly" >
        </div>


  <div class="mb-3">
  <label for="descripcion" class="form-label">Nueva Descripcion</label>
  <textarea class="form-control"  name="descripcion" value="{{$category->descripcion}}"  id="descripcion"  placeholder="Ingrese Descripcion" required ></textarea>
  </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit"  class="btn btn-primary">Actualizar</button>
        {!! Form::close() !!}
        </div>

        </div>
      </div>
    </div>
</div>
</div>
