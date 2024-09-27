@foreach ($user as $user )

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="staticBackdropLabel">SUBIR UNA IMAGEN</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">



            <form   action="{{route('imagens.store')}}"  method="POST"     class="dropzone" id="my-dropzone">
             @csrf



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <button  type="submit"  class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  @endforeach