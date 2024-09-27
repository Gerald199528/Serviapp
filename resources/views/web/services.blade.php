<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Serviapp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('web/img/favicon.ico') }}" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('matrix/assets/images/A.png') }}  " />
    @yield('style')
    @include('web.styles.styles')
</head>

<body>
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
                <a href="{{ route('web') }}" class="nav-item nav-link active">Inicio</a>   
                <a href="{{ route('nosotros') }}" class="nav-item nav-link">Sobre Nosotros</a>               
                <a href="{{ route('contactos') }}" class="nav-item nav-link">Contactos</a> 
                <a href="{{ route('inicio') }}" class="nav-item nav-link">Iniciar Sesión</a>      
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Text Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <h1 style="font-size: 2em; color:black; font-weight: bold; margin-left: 20px; margin-right: 20px;">Gestión de Servicios de la Gobernación del Estado Trujillo:</h1>
        <p style="color:black; text-align: justify; margin-left: 30px; margin-right: 30px;">La Gobernación del Estado Trujillo utiliza sistemas integrales para mejorar su gestión de servicios y garantizar una administración eficiente para el beneficio de sus ciudadanos.
        </p>
    </div>
</div>
<!-- Text End -->
  


<div class="marquee">
    <img src={{ asset('web/img/05f1e32b78819b11e520fc2be879182e.jpg') }}  alt="05f1e32b78819b11e520fc2be879182e">
    <img  src={{ asset('web/img/525825e01bc49abe68efe95c9eb93ed2.jpg') }}  alt="525825e01bc49abe68efe95c9eb93ed2">
    <img  src={{ asset('web/img/6cef68d7ed6615807dcf786d05d9cdbf.jpg') }}  alt="6cef68d7ed6615807dcf786d05d9cdbf">
    <img src={{ asset('web/img/77532aabd66ce45725c1245623eb5bbb.jpg') }}  alt="77532aabd66ce45725c1245623eb5bbb">
    <!-- Agrega más imágenes según sea necesario -->
</div>


  
    <!-- Footer Start -->
    <div class="container-fluid bgh-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+58 4161234567</small>
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