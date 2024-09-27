
    </div>
<div class="page-wrapper">
    <div class="page-breadcrumb">
      <div class="row">

            <h4 class="card-title">Estimado usuario en esta session podras. "Visualizar y actualizar" tus datos personales. De igual manera podras cambiar su imagen de perfil de usuario.</h4>


            <div class="col-12 d-flex no-block align-items-center">
          <div class="ms-auto text-end">

            <nav aria-label="breadcrumb">

                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      @foreach ($user as $user )
          @include('admin.user.modal')
          @endforeach

      <div class="row">
        <div class="col-md-6">
          <div class="card">

              <div class="card-body">
                <h3 class="card-title">Actualizar Datos Personales </h3>

              @include('admin.user.edit')








        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title mb-0">Por favor llena todos los campos correctamente</h3>

                    <br>
                <form  action="{{route('dato.store')}}"   method="POST" id="uses"  class="row g-3 needs-validation" >
                    @csrf

                    <div class="col-md-4 position-relative">
                      <label  class="form-label">ID del usuario actual</label>
                      <input type="text" class="form-control" name="id" id="name" value="{{$user->id}}"   readonly="readonly"  required>

                        @if ($errors->any())
                         <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->get('id') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                      <div >
                      </div>
                    </div>
                    <div class="col-md-4 position-relative">


                      <label  class="form-label"> Cedula C.I <i class="  fas fa-address-card"></i></label>
                      <input type="text" class="form-control" name="cedula"  required>


                        @if ($errors->any())
                         <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->get('id') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
        <div class="valid-tooltip">
                        Campo listo!
                      </div>
                    </div>



                    <div class="col-md-4 position-relative">
                        <label  class="form-label"> Carnet de la patria <i class="  fas fa-address-card"></i></label>
                        <input type="text" class="form-control" name="carnet" id="carnet"  required>
                        <div class="valid-tooltip">
                            Campo listo!
                        </div>
                      </div>


                      <h3 class="card-title"> Ingresa la fecha de tu nacimiento. Para calcular la edad </h3>


                      <div class="col-md-6 position-relative">
                        <label  class="form-label">Ingrese Fecha  <i class="   fas fa-table"></i></label>
                        <input type="date" class="form-control" id="fecha"  required>
                        <div class="valid-tooltip">
                            Campo listo!
                        </div>
                      </div>


                      <div class="col-md-6 position-relative">
                        <label  class="form-label">Edad Actual <i class="  fas fa-user"></i></label>
                        <input type="number" class="form-control" name="edad" id="edad"  readonly="readonly"  required>
                        <div class="valid-tooltip">
                            Campo listo!
                        </div>
                      </div>



                    <div class="col-md-12 position-relative">
                      <label for="validationTooltipUsername" class="form-label">Telefono Personal <i class="   fas fa-mobile-alt"></i></label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" >+58</span>
                        <input type="number" class="form-control" name="telefono"  aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="valid-tooltip">
                            Campo listo!
                        </div>
                      </div>
                    </div>


                    <h3 class="card-title"> Selecciona el "Municipio y Parroquia"</h3>

                    <div class="col-md-6 position-relative">
                      <label  class="form-label">Municipio</label>
                      <select class="form-select"  required name="municipio" id="municipio" onchange="cargarParroquias();">
                        <option selected disabled value="">Seleccione un Municipio</option>
                        <option></option>
                      </select>
                      <div class="valid-tooltip">
                        Campo listo!.
                      </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label class="form-label">Parroquia</label>
                        <select class="form-select"  name="parroquia" id="parroquia" required>
                          <option selected disabled value="">Seleccione una Parroquia</option>
                          <option></option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Escribe una pequeña descripcion sobre la categoria seleccionada!!</label>
                        <textarea class="form-control"  name="direccion" value="{{ old('direccion') }}"   id="exampleFormControlTextarea1" rows="3" required></textarea>
                      </div>

                    <div class="col-12">
                      <button class="btn btn-danger" type="reset">Limpiar</button>
                      <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                  </form>
























<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



</script>






