

<form  method="POST" action="{{route('reset.password.post')}}"  id="pass" >
    @csrf

<h2>Reiniciar Contraseña</h2>

    <input type="hidden"   class="form-control" name="token" value="{{$token}}"  >
    <label  class="form-label">Ingrese Email</label>
        <input type="email"   for="email"  class="form-control" name="email" id="email"  placeholder=" Ingrese Email " required  autofocus>
        @if ($errors->any())
        <ul>
      @foreach ($errors->get('email') as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  <label  class="form-label">Nueva Contraseña</label>
 <input type="password"  for="password"  class="form-control" name="password"  required  placeholder=" Nueva Contraseña "  maxlength="8">

 @if ($errors->any())
 <ul>
@foreach ($errors->get('password') as $error)
   <li>{{ $error }}</li>
@endforeach
</ul>
@endif
<label  class="form-label">Confirmar Contraseña</label>
  <input type="password"    for="password_confirmation" class="form-control" name="password_confirmation"  required  placeholder=" Repitir contraseña " maxlength="8">
             @if ($errors->any())
              <ul>
            @foreach ($errors->get('password_confirmation') as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

     <button  type="submit"  class="btn btn-primary">Confirmar</button>
     </form>



