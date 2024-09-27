<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
 <nav class="sidebar-nav">
   <ul id="sidebarnav" class="pt-4">
     <li class="sidebar-item">
       <a   class="sidebar-link"  href="{{route('home.index')}}"     aria-expanded="false" ><i class="mdi mdi-view-dashboard"></i
         ><span class="hide-menu">Menú</span></a  >
     </li>

        <!-- Administrador -->
    @can('super_administrador')

         <li class="sidebar-item">
       <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
        <i class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Configuración </span></a>
       <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
            <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('list.index')}}"    > <i class="mdi mdi-account-key"></i><span class="hide-menu">Configuracion/Usuarios</span></a>
          </li>


          <li class="sidebar-item"> 
            <a  class="sidebar-link"    href="{{route('reportes_admin.index')}}"  class="sidebar-link has-arrow waves-effect waves-dark"   ><i class="fa-solid fa-layer-group"></i><span class="hide-menu">Reportes Generados</span></a>
          </li>

       </ul>
     </li>
     @endcan

        <!-- Administrador -->
      @can('super_administrador')
         <li class="sidebar-item">
       <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
         <i class="mdi mdi-checkbox-multiple-blank"></i><span class="hide-menu">Categorías</span></a>
       <ul aria-expanded="false" class="collapse first-level">
         <li class="sidebar-item">
           <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"   href="{{route('categories.index')}}"  ><i class="mdi mdi-arrange-bring-forward" ></i><span class="hide-menu">Registrar/Mostrar Categorías</span></a>
         </li>
       </ul>
     </li>
     @endcan

     <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-chart-bubble"></i><span class="hide-menu"> Crear Reporte </span></a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('reportes.index')}}"   ><i class="fa-solid fa-layer-group"></i><span class="hide-menu">Nuevo Reporte </span></a>
          </li>
          <li class="sidebar-item">
            <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('list_reportes.index')}}"   ><i class="fa-solid fa-window-restore"></i><span class="hide-menu">Reportes Generados </span></a>
          </li>

        </ul>
      </li>

      <li class="sidebar-item">
             <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('user.index')}}"    > <i class="mdi mdi-account-circle"></i><span class="hide-menu">Mi perfil </span></a>
      </li>

      <li class="sidebar-item">
        <a id="install-button" class="sidebar-link" href="#" aria-expanded="false">
          <i class="fa-solid fa-download"></i><span class="hide-menu">Instalar App</span>
        </a>
    </li>
 </nav>
</div>
</aside>