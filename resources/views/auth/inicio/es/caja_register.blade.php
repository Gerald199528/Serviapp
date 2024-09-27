<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('matrix/assets/images/A.png') }}  "  />
    @yield('style')
    @include('styles.Css.Login')
</head>
<body>
@yield('body')

                <main>

                    <div class="contenedor__todo">
                        <div class="wrapper" >

                            <div class="button" >
                                <div class="icon">
                                   <i class="fab fa-google"></i>
                                </div>
                                <span>Google</span>
                             </div>

                            <div class="button">
                                <div class="icon">
                                   <i class="fab fa-facebook-f"></i>
                                </div>
                                <span>Facebook</span>
                             </div>


                             <div class="button">
                                <div class="icon"><a href="https://instagram.com/" target="_blank">
                                   <i class="fab fa-instagram" ></i>
                                </div>
                                <span>Instagram</span></a>
                             </div>

                             <div class="button">
                                <div class="icon"><a href="https://codepen.io/" target="_blank">

                                 <i class="fab fa-apple"></i>
                                </div>
                                <span>Apple</span></a>
                             </div>

                        <div class="caja__trasera">
                            <div class="caja__trasera-login">
                                <h2 ><img src={{ asset('matrix/assets/images/au.gif') }}     width="50px" /> ServiApp Trujillo.  </h2>
                                <p ><h3>¿Ya tienes una Cuenta?</h3> </p>
                              <h3>Dale click en iniciar sesión para entrar a la página.</h3>
                                <button class="boton-registrarse"><a class="a" href="{{route('logiar.perform')}}">Iniciar Sesión</a></button>
                            </div>
                            <div class="contenedor__login-register">
                                @yield('from_register')
                       </div>

        </main>
        
</body>
</html>
