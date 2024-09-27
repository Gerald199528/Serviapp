
@extends('auth.inicio.es.recover')
@section('title','Serviapp')
@section('body')
@section('from_login')
@include('auth.inicio.es.recuperar')


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::has('success'))
<script>

 const Toast = Swal.mixin({
  toast: true,
  position: 'top-center',
  showConfirmButton: false,
  timer: 6000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Su enlance se envio correctamente. Si no llega dicho enlace quiere decir que no exite su email en ninguna plataforma'
})
</script>
@endif

@endsection






