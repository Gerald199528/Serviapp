@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')
@include('admin.list_reportes_admin.datatable')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::has('success'))
    <script>
        window.addEventListener('load', function() {
            // Verifica si el Service Worker está controlando la página
            if (!('serviceWorker' in navigator && navigator.serviceWorker.controller)) {
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
                    icon: '{{ (Session::get('success') === "Reporte Cancelado") ? "error" : "success" }}',
                    title: '{{ Session::get('success') }}'
                })
            }
        });
    </script>
@endif






@endsection
