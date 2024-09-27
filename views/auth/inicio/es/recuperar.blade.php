


<form method="post" action="{{ route('logiar.perform') }}" id="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
        <h2>Recuperar Contraseña</h2>
    
        @include('auth.inicio.es.messages')
    
    
    
        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder=" Ingrese correo electronico " required="required" autofocus>
    
        <button  type="submit">Enviar</button>
    </form>
    