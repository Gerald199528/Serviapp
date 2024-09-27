<div>
</div>
</div>
@foreach ($datos as $dato)
<div class="col-md-6">
    <div class="card">

        <div class="card-body">
            <h5 class="card-title mb-0">Perfil de usuario actualizado.</h5>
            <br>


            <form action="{{ route('dato.update', $dato->id_dt) }}" method="POST" id="datos_user"  class="row g-3 needs-validation">
             @csrf
             @method('PUT')


                @foreach ($users as $user)

                <div class="col-md-6 position-relative">
                  <label   class="form-label">Usuario Número:</label>
                  <input type="text" class="form-control"  name="id" id="name" readonly="readonly" value="{{$user->id}}" required>
                     <div >
                  </div>
                </div>
                @endforeach


                <div class="col-md-6">
                  <label  class="form-label"> Cedula C.I <i class="  fas fa-address-card"  ></i></label>
                  <input type="text" class="form-control" name="cedula"id="cedula"  required value="{{$dato->cedula}}"  readonly="readonly">
                </div>



                <div class="col-md-6 position-relative">
                    <label  class="form-label"> Carnet de la patria <i class="  fas fa-address-card"></i></label>
                    <input type="text" class="form-control" name="carnet" id="carnet"  for="carnet"    value="{{$dato->carnet}}" maxlength="10">

                    @if ($errors->any())

                    <ul>
                      @foreach ($errors->get('carnet') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>


                  @endif
                  </div>


                <div class="col-md-6 position-relative">
                  <label   class="form-label" >Telefono Personal <i class="   fas fa-mobile-alt"></i></label>
                  <div class="input-group has-validation">
                    <span class="input-group-text"  >+58</span>
                    <input type="number" class="form-control" name="telefono" id="telefono"  value="{{$dato->telefono}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "11">

                    @if ($errors->any())

                    <ul>
                      @foreach ($errors->get('telefono') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>

                  @endif

                  </div>
                </div>

        <div class="col-12">

          <button  type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>
    @endforeach

      </div>
