@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')
@include('admin.reporte.create')

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
                title: 'Estimado usuario su reporte fue creado exitosamente, pronto nos estaremos comunicando con usted '
            })
        @endif
    }
});
</script>

<script>
window.addEventListener('load', function() {
    // Verifica si el Service Worker está controlando la página
    if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
        @if(Session::has('error'))
            const ToastError = Swal.mixin({
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
            ToastError.fire({
                icon: 'error',
                title: '{{ Session::get("error") }}'
            })
        @endif
    }
});
</script>

@endsection
