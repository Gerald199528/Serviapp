
        <div class="page-breadcrumb">

            <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                @auth

                <h4 class="page-title">Bienbenido a Serviapp  " {{auth()->user()->name }} {{auth()->user()->apellido }} ".Ahora puedes realizar diversas averias.</h4>
                @endauth
                <div class="ms-auto text-end">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">

                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
              <!-- Column -->
              <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                  <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-view-dashboard"></i>
                    </h1>
                    <h6 class="text-white">Menu</h6>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                  <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-chart-bar"></i>
                    </h1>
                    <h6 class="text-white">Grafica de Reportes</h6>
                  </div>
                </div>
              </div>

                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                  <div class="card card-hover">
                    <div class="box bg-success text-center">
                      <h1 class="font-light text-white">
                        <i class="mdi mdi-move-resize-variant"></i>
                      </h1>
                      <h6 class="text-white">Generar reportes</h6>
                    </div>
                  </div>
                </div>

                   <!-- Column -->
              <div class="col-md-6 col-lg-4 col-xlg-3">
                  <div class="card card-hover">
                    <div class="box bg-warning text-center">
                      <h1 class="font-light text-white">
                        <i class="mdi mdi-chart-bubble"></i>
                      </h1>
                      <h6 class="text-white">Hablame Gerardo</h6>
                    </div>
                  </div>
                </div>
                 <!-- Column -->
              <div class="col-md-6 col-lg-4 col-xlg-3">
                  <div class="card card-hover">
                    <div class="box bg-danger text-center">
                      <h1 class="font-light text-white">
                        <i class="mdi mdi-receipt"></i>
                      </h1>
                      <h6 class="text-white">ID</h6>
                    </div>
                  </div>
                </div>

              <!-- Column -->
              <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                  <div class="box bg-info text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-face"></i>
                    </h1>
                    <h6 class="text-white">Usuarios</h6>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-6 col-lg-6 col-xlg-3">
                  <div class="card card-hover">
                    <div class="box bg-info text-center">
                      <h1 class="font-light text-white">
                        <i class="mdi mdi-account-key"></i>
                      </h1>
                      <h6 class="text-white">Configuracion de Usuarios</h6>
                    </div>
                  </div>
                </div>
              <!-- Column -->
              <div class="col-md-6 col-lg-6 col-xlg-3">
                <div class="card card-hover">
                  <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-calendar-check"></i>
                    </h1>
                    <h6 class="text-white">Calnedar</h6>
                  </div>
                </div>
