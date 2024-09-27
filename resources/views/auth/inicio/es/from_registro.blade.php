<form method="post" action="/register" class="formulario__register">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <h2>Crear Cuenta</h2>
    <input type="text"  name="name" value="{{ old('name') }}" placeholder="Nombres" required="required" autofocus>
    @if ($errors->has('name'))
    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
@endif
<input type="text"  name="apellido" value="{{ old('apellido') }}" placeholder="Apellidos" required="required" autofocus>
@if ($errors->has('apellido'))
<span class="text-danger text-left">{{ $errors->first('apellido') }}</span>
@endif
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required="required" autofocus>
    @if ($errors->any())
    <ul>
  @foreach ($errors->get('email') as $error)
      <li>{{ $error }}</li>
  @endforeach
</ul>
@endif



    <input type="password"  name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required" maxlength="8">
    @if ($errors->any())
    <ul>
  @foreach ($errors->get('password') as $error)
      <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  placeholder="Repetir Contraseña" required="required" maxlength="8">

    @if ($errors->any())
    <ul>
  @foreach ($errors->get('password_confirmation') as $error)
      <li>{{ $error }}</li>
  @endforeach
</ul>
@endif
<button type="submit" class="boton-registrarse">Guardar</button>


</form>

