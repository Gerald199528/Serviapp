@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')
@include('admin.list_reportes.list_reportes')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::has('success'))
<script>
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
  title: 'Reporte Eliminado Correctamente'
})
</script>
@endif





@endsection
