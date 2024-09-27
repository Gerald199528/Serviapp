@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')
@include('admin.list_user.list')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
window.addEventListener('load', function() {
    // Verifica si el Service Worker está controlando la página
    if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('success'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-center',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Datos actualizados correctamente. Cargando datos, por favor espere.'
            })
        @endif

        @if(Session::has('info'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-center',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'info',
                title: 'Nivel de usuario bajado a "Usuario".'
            })
        @endif
    }
});
</script>

<script>
    window.addEventListener('load', function() {
   // Verifica si el Service Worker está controlando la página
   if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('warning'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-center',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'Usuario Eliminado Correctamente.'
            })
        @endif

                @if(Session::has('error'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-center',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'error',
                    title: 'No se puede eliminar, ya que eres Super_Administrador.'
                })
            @endif
        }
    });
    </script>

@endsection
