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

                    <div class="contenedor__todo" >

                        <div class="wrapper" >

                           



                    <div class="caja__trasera"  >
                  <div  class="contenedor__login-register" style="right: 100%">

                     @yield('from_login')
                       </div>


                       <div class="caja__trasera-register"   >

                        <h3 ><img src={{ asset('matrix/assets/images/au.gif') }}     width="50px" /> Serviapp-Trujillo.  </h3>
                        <p >  Recupera tu cuenta !  </p> ¿Olvidaste tu contraseña?   <p >Estimado usuario apra recuperar tu contraseña ingrese tu correo electronico y se te enviara automaticamente. </p>
                     

                    </div>

                </div>

            </div>
        </main>




</body>
</html>
