

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Cambiar Contraseña</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


<form  method="post" action="{{route('pass.update', $user->id)}}"  id="pass" >

    {{ csrf_field() }}
    {{ method_field('PUT') }}

        <div class="col-md-12">
          <label for="password" class="form-label">Nueva Contraseña</label>
          <input type="password"   class="form-control" name="password"  required >

          </div>


        <div class="col-md-12">
          <label for="password_confirmation" class="form-label">Contraseña Actual</label>
          <input type="password"  class="form-control" name="password_confirmation"  required >
          @if ($errors->any())
          <div class="alert alert-danger">
       <ul>
         @foreach ($errors->get('password_confirmation') as $error)
             <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
     @endif
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <button  type="submit"  class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>
