<div class="container-fluid">
  <div class="card">
    <div class="card-body wizard-content">
      <h4 class="card-title">Estimado usuario para crear un reporte, debes tener  tus datos actualizados de lo contrario no se podrá realizar dicha operación.</h4>
      <form method="POST" action="{{route('reportes.store')}}" id="example-form"  >
          @csrf
          <div>
                <section>
             @livewire('datos-user') <!-- Datos del Reportante-->
                </section>
               
                <section>
              @include('admin.reporte.detalle') <!-- Detalle del Reporte -->
                </section>

                <section>               
              @include('admin.reporte.maps') <!-- GPS -->
                </section>
              </form>
        </div>
