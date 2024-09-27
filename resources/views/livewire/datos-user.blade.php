<div>
    @if ($datos->isEmpty())
    <div class="alert alert-danger" role="alert">
        No hay datos registrados. Por favor, dirígete a tu perfil y llénalos para poder realizar un reporte.
    </div>
@endif

@foreach ($datos as $dato)
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @livewireStyles
                <h4 class="card-title mb-0">Datos del Reportante.</h4>
                <br>
                @foreach ($users as $user)
                    <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{$user->id}}" required>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Nombre del usuario <i class="fas fa-users"></i></label>
                            <input type="text" class="form-control" value="{{$user->name}}" readonly="readonly" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Apellido del usuario <i class="fas fa-address-card"></i> </label>
                            <input type="text" class="form-control" name="apellido" id="apellido" value="{{$user->apellido}}" readonly="readonly" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Email del usuario <i class="fas fa-address-card"></i> </label>
                            <input type="text" class="form-control" value="{{$user->email}}" readonly="readonly" required>
                        </div>
                    </div>
                    <br>
                @endforeach
                <input type="hidden" class="form-control" name="datos_id" value="{{$dato->id}}" required>
                <div class="row">
                    <div class="col-md-4 position-relative">
                        <label class="form-label">Cedula C.I <i class="fas fa-address-card"></i> </label>
                        <input type="text" class="form-control" value="{{$dato->cedula}}" readonly="readonly" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Carnet de la patria <i class="fas fa-address-card"></i></label>
                        <input type="text" class="form-control" value="{{$dato->carnet}}" readonly="readonly" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Telefono Personal <i class="fas fa-mobile-alt"></i></label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">+58</span>
                            <input type="number" class="form-control" value="{{$dato->telefono}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" readonly="readonly" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@livewireScripts
        </div>
    </div>
</div>