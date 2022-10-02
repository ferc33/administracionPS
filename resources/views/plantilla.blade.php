{{-- @extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('plugins.Datatables', true)

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
 --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inventory System</title>

    {{-- PLUGIN CSS --}}

    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    {{-- Boostrap 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    {{-- AdminLTE --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.min.css">

    {{-- ScrollBar --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/OverlayScrollbars.min.css">

    {{-- PLUGINS JS --}}

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/538ced9db2.js" crossorigin="anonymous"></script>

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    {{-- Popper --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

    {{-- AdminLTE --}}
    <script src="{{ url('/') }}/js/plugins/adminlte.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('modulos.header')
        @include('modulos.sidebar')
        @include('paginas.index')
        @include('modulos.footer')

    </div>

</body>

</html>
