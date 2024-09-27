

<form  method="post" action="{{route('user.update', $user->id)}}" id="use" >

    {{ csrf_field() }}
    {{ method_field('PUT') }}


        <div class="col-md-12" >
          <label for="name" class="form-label">Nombre Completo</label>
          <input type="text"    class="form-control" name="name" id="name" value="{{$user->name}}" >
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-12">
          <label for="apellido" class="form-label">Apellido Segundo Apellido </label>
          <input type="text" class="form-control" name="apellido" id="apellido" value="{{$user->apellido}}"  >
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>



        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" readonly="readonly"  >

            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cambiar Contraseña
                <i class="mdi mdi-move-resize-variant"> </i>
                </button>

          <button class="btn btn-primary" type="submit">Actualizar</button>
        </div>
      </form>

    </div>


</div>

</div>

    <div class="col-md-6">
      <div class="card">

          <div class="card-body">
            <h3 class="card-title">Cambiar Imagen de Perfil </h3>


            <label  class="form-label">Subir una imagen</label>
           <form   action="{{route('imagens.store')}}"  method="POST"     class="dropzone" id="my-dropzone">
            @csrf


  </div>


  <div class="card-body">
    <button class="btn btn-primary" type="submit">Confirmar</button>
</form>



</div>
</div>
  </div>





