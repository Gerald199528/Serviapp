@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')
@include('admin.category.create')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                title: 'Categoría Eliminada Correctamente, Cargando Datos, Por favor Espere'
            })
        @endif
    }
});
</script>

<script>
window.addEventListener('load', function() {
    // Verifica si el Service Worker está controlando la página
    if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('create'))
            const ToastCreate = Swal.mixin({
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
            ToastCreate.fire({
                icon: 'success',
                title: 'Categoría Creada Correctamente,Cargando Datos, Por favor Espere'
            })
        @endif
    }
});
</script>

<script>
window.addEventListener('load', function() {
    // Verifica si el Service Worker está controlando la página
    if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('up'))
            const ToastUp = Swal.mixin({
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
            ToastUp.fire({
                icon: 'success',
                title: 'Descripcion de  Categoría Actualizada Correctamente, Cargando Datos, Por favor Espere'
            })
        @endif
    }
});
</script>

@endsection
