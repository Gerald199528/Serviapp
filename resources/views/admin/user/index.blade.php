@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')
@include('admin.user.create')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<script>
window.addEventListener('load', function() {
    // Verifica si el Service Worker está controlando la página
    if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('use'))
            const ToastUse = Swal.mixin({
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
            ToastUse.fire({
                icon: 'success',
                title: 'Datos actualizado correctamente. Cargando datos por favor espere'
            })
        @endif
    }
});
</script>

<script>
window.addEventListener('load', function() {
    // Verifica si el Service Worker está controlando la página
    if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('success'))
            const ToastSuccess = Swal.mixin({
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
            ToastSuccess.fire({
                icon: 'success',
                title: 'Datos actualizado correctamente. Cargando datos por favor espere'
            })
        @endif
    }
});
</script>

<script>
    // Note that the name "myDropzone" is the camelized
    // id of the form.
    Dropzone.options.myDropzone = {

headers:{

'X-CSRF-TOKEN' : "{{csrf_token()}}"


},

dictDefaultMessage: "Arrastre una imagen para cargarla",
acceptedFiles: "image/*",

masFilesize: 2,

    maxFiles: 1, // Limita a 5 imágenes




      // Configuration options go here
    };
  </script>

@endsection
