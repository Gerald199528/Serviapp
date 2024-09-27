

               <a  class="  nav-link dropdown-toggle text-muted   waves-effect waves-dark pro-pic "   href="#" id="navbarDropdown"    role="button"   data-bs-toggle="dropdown"    aria-expanded="false"   >

         @auth

           @livewire('imagens')

                  @endauth
                </a>

                <ul   class="dropdown-menu dropdown-menu-end user-dd animated"   aria-labelledby="navbarDropdown"   >
                  <a class="dropdown-item"  href="{{route('user.index')}}">
                    <i class="mdi mdi-account me-1 ms-1"    ></i> Perfil Usuario</a    >

                </ul>
              </div>
              <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell font-24" style="position: relative;"></i>
                        <span id="notificationCount" class="badge bg-danger rounded-circle" style="position: absolute; top: -5px; right: -5px; font-size: 18px;"></span></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('list_reportes.index')}}">Mis Reportes</a></li>
                    </ul>
                </li>
            </ul>
            
            <ul class="navbar-nav ">
              <li class="nav-item d-none d-lg-block">
                  <a href="{{ route('logout.perform') }}" class="nav-link Cerrar" data-sidebartype="mini-sidebar">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  </a>
              </li>
          </ul>
          

        </nav>
