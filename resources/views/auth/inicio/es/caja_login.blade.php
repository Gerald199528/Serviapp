<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('matrix/assets/images/A.png') }}  "  />
    @yield('style')
    @include('styles.Css.Login')
    @laravelPWA

</head>
<body>
@yield('body')
                <main>

                    <div class="contenedor__todo" >

                        <div class="wrapper" >

                            <div class="button" >
                                <div class="icon"><a  href="{{route('google-auth')}}" target="_blank">
                                   <i class="fab fa-google"></i>
                                </div>
                                <span>Google</span></a>
                             </div>

                            <div class="button">
                                <div class="icon"  ><a href="{{route('facebook-auth')}}" target="_blank">
                                   <i class="fab fa-facebook-f"></i>
                                </div>
                                <span>Facebook</span></a>
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




                    <div class="caja__trasera"  >
                  <div  class="contenedor__login-register" style="right: 100%">

                     @yield('from_login')
                       </div>


                       <div class="caja__trasera-register"   >

                        <h2 style="font-size: 24px;"><img src="{{ asset('matrix/assets/images/au.gif') }}" width="50px" /> ServiApp Trujillo</h2>
                        <p ><h3>¿No tienes una Cuenta?</h3>      </p>
                        <br>
                        <h3>Te estábamos esperando!</h3>
                     </p>

                        <button><a    class="a" href="{{route('register.perform')}}" >Regístrate</a></button>
                    </div>

                </div>

             
            </div>
            
        </main>
     

</body>
</html>
