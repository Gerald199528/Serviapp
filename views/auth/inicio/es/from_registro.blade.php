<form method="post" action="/register" class="formulario__register">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <h2>Regístrarse</h2>
    <input type="text"  name="name" value="{{ old('name') }}" placeholder="Nombre Completo" required="required" autofocus>
    @if ($errors->has('name'))
    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
@endif
<input type="text"  name="apellido" value="{{ old('apellido') }}" placeholder="Apellido Completo" required="required" autofocus>
@if ($errors->has('apellido'))
<span class="text-danger text-left">{{ $errors->first('apellido') }}</span>
@endif
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required="required" autofocus>
    @if ($errors->has('email'))
    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
@endif

    <input type="password"  name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required">
    @if ($errors->has('password'))
    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
@endif
    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  placeholder="Repetir Contraseña" required="required">
    @if ($errors->has('password_confirmation'))
    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
@endif
    <button type="submit">Regístrarse</button>
</form>
</div>

</div>
