
      <li class="nav-item dropdown">
         <a  class="  nav-link dropdown-toggle text-muted   waves-effect waves-dark pro-pic "   href="#" id="navbarDropdown"    role="button"   data-bs-toggle="dropdown"    aria-expanded="false"   >

         @auth

           @livewire('imagens')

                  @endauth
                </a>

                <ul  class="dropdown-menu dropdown-menu-end user-dd animated"   aria-labelledby="navbarDropdown"   >
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="mdi mdi-account me-1 ms-1"></i> Perfil Usuario</a    >
                </ul>
              </div>
              <ul class="navbar-nav ">
                <li class="nav-item d-none d-lg-block">
                <a href="{{ route('logout.perform') }}"   class="nav-link " href="javascript:void(0)" data-sidebartype="mini-sidebar"   >
                <i class="fa-solid fa-arrow-right-from-bracket" ></i></a >
                </li>
            </ul>

        </nav>
