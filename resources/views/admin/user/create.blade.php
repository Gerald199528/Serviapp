
    </div>
<div class="page-wrapper">
    <div class="page-breadcrumb">
      <div class="row">

            <h4 class="card-title">¡Bienvenido a tu perfil! Aquí puedes actualizar y registrar tus datos personales. De esta manera, nos ayuda a brindarte un servicio más personalizado y eficiente.</h4>


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

          @include('admin.user.modal')
      

      <div class="row">
        <div class="col-md-6">
          <div class="card">

              <div class="card-body">
                <h5 class="card-title">Actualizar datos personales </h5>

              @include('admin.user.edit')


        <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                

                <form  action="{{route('dato.store')}}"   method="POST"   class="row g-3 needs-validation" id="user">
                    @csrf

                    <div class="col-md-4 position-relative">
                      <label  class="form-label">Usuario Número:</label>
                      <input type="text" class="form-control" name="id" id="name" value="{{$user->id}}"   readonly="readonly"  required>

                        @if ($errors->any())

                      <ul>
                        @foreach ($errors->get('id') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>

                    @endif

                      <div >
                      </div>
                    </div>
                    <div class="col-md-4 position-relative">


                      <label  class="form-label"> Cedula C.I <i class="  fas fa-address-card"  ></i></label>

                      <input type="text" class="form-control" name="cedula"id="cedula"  required  maxlength="8">
                        @if ($errors->any())

                      <ul>
                        @foreach ($errors->get('cedula') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>

                    @endif
        <div class="valid-tooltip">
                      Validado
                      </div>
                    </div>



                    <div class="col-md-4 position-relative">
                        <label  class="form-label"> Carnet de la patria <i class="  fas fa-address-card"></i></label>
                        <input type="text" class="form-control" name="carnet" id="carnet"    maxlength="10">



                        @if ($errors->any())

                      <ul>
                        @foreach ($errors->get('carnet') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>


                    @endif
                        <div class="valid-tooltip">
                            Validado
                        </div>
                      </div>


                      <div class="col-md-4 position-relative">
                        <label  class="form-label">Ingrese Fecha  <i class="   fas fa-table"></i></label>
                        <input type="date" class="form-control" id="fecha"  required>
                        <div class="valid-tooltip">
                          Validado
                        </div>
                      </div>


                      <div class="col-md-4 position-relative">
                        <label  class="form-label">Edad Actual <i class="  fas fa-user"></i></label>
                        <input type="number" class="form-control" name="edad" id="edad"  readonly="readonly"  required>


                        @if ($errors->any())

                      <ul>
                        @foreach ($errors->get('edad') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>

                    @endif
                        <div class="valid-tooltip">
                          Validado
                        </div>
                      </div>



                    <div class="col-md-4 position-relative">
                      <label class="form-label" >Telefono Personal <i class="   fas fa-mobile-alt"></i></label>
                      <div class="input-group has-validation">
                        <span class="input-group-text"  >+58</span>
                        <input type="number" class="form-control" name="telefono" id="telefono"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "11" required>

                        @if ($errors->any())

                      <ul>
                        @foreach ($errors->get('telefono') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>

                    @endif
                        <div class="valid-tooltip">
                          Validado
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-danger" type="reset">Limpiar</button>
                      <button class="btn btn-primary" type="submit">Guardar</button>

                    </div>
                  </form>


                </div>

            </div>

            @livewire('modal-datos')





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



