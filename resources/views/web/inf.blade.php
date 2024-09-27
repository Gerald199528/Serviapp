<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Serviapp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('matrix/assets/images/A.png') }}  " />
  
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
                <a  href="{{ route('service') }}" class="nav-item nav-link">Servicios</a>
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
        <h1 style="font-size: 2em; color:black; font-weight: bold; margin-left: 20px; margin-right: 20px;">Gobernación del Estado Trujillo:</h1>
        <p style="color:black; text-align: justify; margin-left: 30px; margin-right: 30px;">La Gobernación del Estado Trujillo se dedica a servir a los ciudadanos de nuestro estado, trabajando cada día para hacer de Trujillo un lugar mejor para vivir, trabajar y visitar.
            Fundada en 1864, la Gobernación del Estado Trujillo ha trabajado incansablemente para promover el bienestar de todos los trujillanos. Nuestro equipo está liderado por el Gobernador Gerardo Márquez, 
            quien asumió el cargo en 2021. Junto a él, un equipo de dedicados funcionarios trabaja para llevar a cabo nuestra misión. Asimismo, La Gobernación del Estado Trujillo consta de varios departamentos, 
            cada uno dedicado a un aspecto específico del gobierno estatal, como Educación, Salud, Transporte, otros... 
        </p>
    </div>
</div>
<!-- Text End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">        
    <div class="carousel-inner">
        <img class="position:absolute h-50"  src={{ asset('web/img/Trujillo-Capital.jpg') }}  style="object-fit: cover; display: block; margin-left: auto; margin-right: auto;">        
    </div>
</div>
<!-- Carousel End -->

  
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