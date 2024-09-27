
<!-- Modal -->
<div class="modal fade" id="exampleModalEditar{{ $user->id }}" aria-labelledby="exampleModa">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="card-title mb-0">Vista Administrador  </h3>
        </div>
        <div class="modal-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      @php
                      $dato = $datos->where('id', $user->id)->first();
                      @endphp
                      @if($dato)
                      <form action="{{ route('dato.update', $dato->id) }}" method="POST"   class="row g-3 needs-validation">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                        
                          <div class="col-md-12 position-relative">
                            <label   class="form-label">ID del usuario actual</label>
                            <input type="text" class="form-control" name="id" id="name" readonly="readonly" value="{{$user->id}}" required>
            <div >
                            </div>
                          </div>
                     
                          <div class="col-md-6">
                            <label  class="form-label"> Cedula C.I <i class="  fas fa-address-card"  ></i></label>
                            <input type="text" class="form-control" name="cedula" id="cedula"  required value="{{$dato->cedula}}"  maxlength="8" >
                              @if ($errors->any())
                            <ul>
                              @foreach ($errors->get('cedula') as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                          @endif
                          </div>
                          <div class="col-md-6 position-relative">
                              <label for="carnet"  class="form-label"> Carnet de la patria <i class="  fas fa-address-card"></i></label>
                              <input type="text" class="form-control" name="carnet" id="carnet"  required  value="{{$dato->carnet}}" maxlength="10">
                              @if ($errors->any())
                              <ul>
                                @foreach ($errors->get('carnet') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                              </ul>
                            @endif
                            </div>
                            <div class="col-md-6 position-relative">
                              <label  class="form-label">Ingrese Fecha  <i class="   fas fa-table"></i></label>
                              <input type="date" class="form-control" id="fecha"  >
                            </div>

                            <div class="col-md-6 position-relative">
                              <label for="edad" class="form-label">Edad Actual <i class="  fas fa-user"></i></label>
                              <input type="number" class="form-control" name="edad" id="edad"   value="{{$dato->edad}}"  readonly="readonly"   >
                              @if ($errors->any())

                              <ul>
                                @foreach ($errors->get('edad') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                              </ul>

                            @endif


                            </div>



                          <div class="col-md-12 position-relative">
                            <label  for ="carnet" class="form-label" >Telefono Personal <i class="   fas fa-mobile-alt"></i></label>
                            <div class="input-group has-validation">
                              <span class="input-group-text"  >+58</span>
                              <input type="number" class="form-control" name="telefono" id="telefono" value="{{$dato->telefono}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "11">

                              @if ($errors->any())

                              <ul>
                                @foreach ($errors->get('telefono') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                              </ul>

                            @endif

                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button  type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                        </form>
                        @else
      <p>No se encontraron datos para este usuario.</p>
                       @endif
                       <script>
                        function openModal(userId) {
                            $('#exampleModal' + userId).modal('show');
                        }
                    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

