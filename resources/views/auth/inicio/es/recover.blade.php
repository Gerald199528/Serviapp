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
                        <h2 style="font-size: 24px;"><img src="{{ asset('matrix/assets/images/au.gif') }}" width="50px" /> ServiApp Trujillo</h2>
                        <p ><h3>Recupera tu cuenta.</h3>      </p>
                        <h3>Ingresa el Correo Electrónico con el que has creado tu usuario.</h3>
                     </p>

                    </div>

                </div>

            </div>
        </main>




</body>
</html>
