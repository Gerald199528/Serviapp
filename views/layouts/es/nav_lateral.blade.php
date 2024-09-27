
<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
 <nav class="sidebar-nav">
   <ul id="sidebarnav" class="pt-4">
     <li class="sidebar-item">
       <a   class="sidebar-link"  href="{{route('home.index')}}"     aria-expanded="false" ><i class="mdi mdi-view-dashboard"></i
         ><span class="hide-menu">Home</span></a  >
     </li>

     <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-account-key"></i><span class="hide-menu"> Configuracion de usuario </span></a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('user.index')}}"    > <i class="mdi mdi-face"></i><span class="hide-menu">Usuario </span></a>
          </li>

          <li class="sidebar-item">
            <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('list.index')}}"    > <i class="fas fa-address-card"></i><span class="hide-menu">Lista de usuarios </span></a>
          </li>



        </ul>
      </li>





         <li class="sidebar-item">
       <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
         <i class="mdi mdi-move-resize-variant"></i><span class="hide-menu"> Registrar categorias </span></a>
       <ul aria-expanded="false" class="collapse first-level">
         <li class="sidebar-item">
           <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"   href="{{route('categories.index')}}"  ><i class="mdi mdi-note-outline" ></i><span class="hide-menu">Registrar/Mostrar Lista </span></a>
         </li>




       </ul>
     </li>

     <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-receipt"></i><span class="hide-menu"> Crear Reporte </span></a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a  class="sidebar-link"  class="sidebar-link has-arrow waves-effect waves-dark"  href="{{route('reporte.index')}}"   > <i class="mdi mdi-note-outline" ></i><span class="hide-menu">Crear Reporte </span></a>
          </li>




        </ul>
      </li>







 </nav>

</div>
<!-- End Sidebar scroll-->
</aside>
