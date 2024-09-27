<div class="page-breadcrumb">
    <div class="row">
        @auth
        <div class="col-12 d-flex no-block align-items-center">
            <img src="{{ asset('matrix/assets/images/au.gif') }}" alt="homepage" class="light-logo" width="60" />
            <span class="logo-text ms-2">
                <h3 class="page-title">¡Bienvenido(a): <b class="logo-icon ps-2"></b> {{ auth()->user()->name }} {{ auth()->user()->apellido}}... Juntos, podemos hacer de nuestro Estado, un lugar mejor!</h3>
            </span>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"></ol>
                </nav>
            </div>
        </div>
        <style>
            .moving-text {
                animation: moving-text 5s linear infinite;
                font-size: 18px; /* Ajusta el tamaño de letra según tus necesidades */
            }
            .custom-margin {
                margin-top: -40px; /* Ajusta el valor según tus necesidades */
            }
        </style>
        <div class="col-12 d-flex no-block align-items-center justify-content-end custom-margin">
            <p class="text-end"><strong class="moving-text">Última conexión:</strong> {{ auth()->user()->ultima_conexion->format('d/m/Y H:i') }}</p>
        </div>
        @endauth
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row">

<!-- Nuevo Reporte -->
<div class="col-md-6 col-lg-4">
    <a href="{{route('reportes.index')}}"  class="sidebar-link">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-chart-bubble"></i></h1>
                <h4 class="text-white">Nuevo Reporte</h4>
            </div>
        </div>
    </a>
</div>

 <!-- Mis reportes-->
<div class="col-md-6 col-lg-4">
    <a href="{{route('list_reportes.index')}}"  class="sidebar-link">
    <div class="card card-hover">
      <div class="box bg-danger text-center">
        <h1 class="font-light text-white">
          <i class="mdi mdi-book-multiple"></i>
        </h1>
        <h4 class="text-white">Mis reportes({{ $reportCount }})</h4>
      </div>
    </div>
</a>
  </div>
       
        <!-- Perfil Usuario -->
        <div class="col-md-6 col-lg-4">
            <a href="{{route('user.index')}}" class="sidebar-link">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-face"></i></h1>
                        <h4 class="text-white">Perfil Usuario</h4>
                    </div>
                </div>
            </a>
         
        </div>
     
         

         <!-- Nueva categoria -->
        @can('super_administrador')
        <div class="col-md-6 col-lg-4">
            <a href="{{route('categories.index')}}" class="sidebar-link">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrange-bring-forward"></i></h1>
                        <h4 class="text-white">Nueva categoría</h4>
                    </div>
                </div>
            </a>
        </div>

     @endcan

     
     <!-- Reportes de Usuarios -->
     @can('super_administrador')
     <div class="col-md-6 col-lg-4">
         <a href="{{route('reportes_admin.index')}}" class="sidebar-link">
             <div class="card card-hover">
                 <div class="box bg-primary text-center">
                     <h1 class="font-light text-white"><i class="fa-solid fa-layer-group"></i></h1>
                     <h4 class="text-white">Reportes de Usuarios</h4>
                 </div>
             </div>
         </a>
     </div>

     @endcan

     <!-- Configuración de Usuarios -->
     @can('super_administrador')
     <div class="col-md-6 col-lg-4">     
         <a href="{{ route('list.index') }}" class="sidebar-link">
             <div class="card card-hover">
                 <div class="box bg-secondary text-center">
                     <h1 class="font-light text-white"><i class="mdi mdi-account-settings-variant"></i></h1>
                     <h4 class="text-white">Configuración de Usuarios({{ $userCount }})</h4>
                 </div>
             </div>
         </a>
    
     </div>
     @endcan

        
      

          @can('super_administrador')
          
                @include('admin.charts.index')
                @endcan
    </div>
</div>
