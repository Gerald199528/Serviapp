
    <form method="post" action="{{ route('logiar.perform') }}" id="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h2>Iniciar Sesión</h2>

        @include('auth.inicio.es.messages')

        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder=" Ingrese su Correo Electrónico " required="required" autofocus>
        @if ($errors->has('email'))
            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
        @endif

        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required"  maxlength="8">
        <label for="floatingPassword"></label>
        @if ($errors->has('password'))
            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
        <button onclick="location.href='{{route('web')}}'" type="button"><i class="fa-solid fa-arrow-left"></i></button>
        <button type="submit">Entrar</button>
        <!-- Aquí está tu botón -->
        <br><br><br>
        <a href="{{ route('recover') }}" class="a">
            <h4>¿Olvidó su Contraseña?</h4></a>
    </form>
