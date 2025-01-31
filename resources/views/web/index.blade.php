<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('matrix/assets/images/A.png') }}  " />
    @yield('style')
    @include('web.styles.styles')

</head>

<body>

    @yield('body')

 <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+58 4165355421</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-phone-alt mr-2"></i>+58 4124202612</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fa-brands fa-x-twitter"></i>

                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <img  src={{ asset('web/img/Logo-Gob.png') }}  style="position:absolute; left: 0; width:150px;">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-4 py-lg-0 px-lg-5">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0" style="margin-right: 40px;">               
                <a href="{{ route('nosotros') }}" class="nav-item nav-link">Sobre Nosotros</a>
                <a  href="{{ route('service') }}" class="nav-item nav-link">Servicios</a>
                <a href="{{ route('contactos') }}" class="nav-item nav-link">Contactos</a> 
                <a href="{{ route('inicio') }}" class="nav-item nav-link">Iniciar Sesión</a>    
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->






    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">        
            <div class="carousel-inner">
                    <img class="position-absolute w-100 h-100"  src={{ asset('web/img/Trujillo-Gerardo.jpg') }}   style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Háblame Gerardo</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">ServiApp Trujillo</h3>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Entre ustedes y yo</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Carousel End -->

  
    <!-- Footer Start -->
   
    
    <div class="container-fluid bgh-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+58 4165355421</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>@hablamegerardo</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
   
</body>

</html>