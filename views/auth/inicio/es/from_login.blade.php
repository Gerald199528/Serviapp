


<form method="post" action="{{ route('logiar.perform') }}" id="">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <h2>Iniciar Sesión</h2>

    @include('auth.inicio.es.messages')



    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder=" Ingrese correo electronico " required="required" autofocus>

    @if ($errors->has('email'))
        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
    @endif
    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required">
    <label for="floatingPassword"></label>
    @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
    @endif
    <button  type="submit">Entrar</button>
</form>
