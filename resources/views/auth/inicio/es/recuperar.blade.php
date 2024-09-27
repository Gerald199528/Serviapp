<form method="POST" action="{{ route('recover.post') }}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="email" />

        <h2>Recuperar Contraseña</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
     <ul>
       @foreach ($errors->get('email') as $error)
           <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div>
   @endif


        <input type="email" class="form-control"  name="email"  placeholder=" Ingrese su Correo Electrónico " required="required" autofocus>
        <button onclick="location.href='{{route('logiar.show')}}'" type="button"><i class="fa-solid fa-arrow-left"></i></button>
        <button  type="submit">Enviar</button>
    </form>
    {!! Html::script('sweetalert2/app.js')!!}
