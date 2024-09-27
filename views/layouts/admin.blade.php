<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"  />
    <meta name="description"content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('matrix/assets/images/A.png') }}  "  />
    @yield('style')
    @include('styles.Css.Link')
</head>
<body>

@yield('body')
<div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"  data-sidebar-position="absolute"  data-header-position="absolute"  data-boxed-layout="full" >
        <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="{{route('home.index')}}"   >
            <b class="logo-icon ps-2">
                <img  src={{ asset('matrix/assets/images/au.gif') }}    alt="homepage"  class="light-logo"  width="40" />
            </b>
                <span class="logo-text ms-2">
                <img src={{ asset('matrix/assets/images/SERVI.png') }}  alt="homepage"  class="light-logo" />
            </span>
                </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none"  href="javascript:void(0)" ></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" >
            <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar" ><i class="mdi mdi-menu font-24"></i></a>
            </li>
            </ul>

                @include('layouts.es.profile')

            </header>

            @include('layouts.es.nav_lateral')
            <div class="page-wrapper">
                @yield('nav')

            </footer>
            @yield('scriipt')
            @include('styles.Js.Js')

            </body>

            </html>
