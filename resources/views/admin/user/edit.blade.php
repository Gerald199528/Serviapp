

<form  method="post" action="{{route('user.update', $user->id)}}" id="uses" >

    {{ csrf_field() }}
    {{ method_field('PUT') }}


        <div class="col-md-12" >
          <label for="name" class="form-label">Nombres</label>
          <input type="text"    class="form-control" name="name" id="name" value="{{$user->name}}" >
          @if ($errors->any())

          <ul>
         @foreach ($errors->get('name') as $error)
            <li>{{ $error }}</li>
         @endforeach
         </ul>

         @endif
          
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <br>
        <div class="col-md-12">
          <label for="apellido" class="form-label">Apellidos </label>
          <input type="text" class="form-control" name="apellido" id="apellido" value="{{$user->apellido}}"  >

          @if ($errors->any())

          <ul>
         @foreach ($errors->get('apellido') as $error)
            <li>{{ $error }}</li>
         @endforeach
         </ul>

         @endif
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <br>

        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" readonly="readonly"  >

            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="card-body">


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Importar imagen de usuario
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
            <h5 class="card-title">Cambiar Contraseña </h5>
            

<form  method="post" action="{{route('pass.update', $user->id)}}"  id="pass" >

    {{ csrf_field() }}
    {{ method_field('PUT') }}

        <div class="col-md-12">
          <label for="password" class="form-label">Ingresa una nueva contraseña</label>
          <input type="password"   class="form-control" name="password"  placeholder=" Nueva Contraseña "  maxlength="8">
          </div>

          @if ($errors->any())

          <ul>
         @foreach ($errors->get('password') as $error)
            <li>{{ $error }}</li>
         @endforeach
         </ul>
        
         @endif
         <br>
        <div class="col-md-12">
          <label for="password_confirmation" class="form-label">Repetir contraseña</label>
          <input type="password"  class="form-control" name="password_confirmation"  placeholder=" Confirmar Contraseña "  maxlength="8">
          @if ($errors->any())

       <ul>
         @foreach ($errors->get('password_confirmation') as $error)
             <li>{{ $error }}</li>
         @endforeach
       </ul>

     @endif
          </div>


  </div>


  <div class="card-body">
    <button class="btn btn-primary" type="submit">Confirmar</button>
</form>



</div>

</div>


  </div>




