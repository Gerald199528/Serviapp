<h1>Reiniciar contraseña</h1>

<img src="{{ asset('logos/au.gif') }}" alt="Logo">

<p>Estimado usuario, si desea reiniciar su contraseña:</p>

<a href="{{route('reset.password', $token)}}">Presiona este enlace para reiniciar tu Contraseña</a>
