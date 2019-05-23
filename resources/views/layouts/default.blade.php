<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crediapoyo-@yield('title') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/rangeslider/rangeslider.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-blue">
    <a class="navbar-brand" href="/">
        <img class="logo" src="{{ asset('img/Logo.png') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>--}}
            <li class="nav-item">
                <a class="nav-link nav-item-border-two" href="/quienes-somos">¿QUIENES <div class="d-inline d-md-block"></div> SOMOS?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-item-border-two" href="/donde-estamos">¿DONDE <div class="d-inline d-md-block"></div> ESTAMOS? </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-item-border-two" href="/soluciones-financieras">SOLUCIONES <div class="d-inline d-md-block"></div> FINANCIERAS </a>
            </li>
            <li class="nav-item nav-item-border-two">
                <a class="nav-link mt-md-2 " href="/contacto">CONTACTO </a>
            </li>
            <li class="nav-item nav-item-border-two">
                <a class="nav-link mt-md-2 " href="/blog">BLOG</a>
            </li>

            <li class="nav-item">
                <a class="nav-link mt-md-2" href="/afiliate">AFILIATE</a>
            </li>


        </ul>

    </div>
</nav>
@yield('content')
{{-- footer--}}
<div class="barra-contacto mt-2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="barra-contacto__title">MENÚ</span>
            </div>
            <div class="col-12 text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="">Home |</a> </li>
                    <li class="list-inline-item"><a href="">¿Quiénes somos? | </a> </li>
                    <li class="list-inline-item"><a href="">¿Dónde estamos? | </a> </li>
                    <li class="list-inline-item"><a href="">Soluciones Financieras | </a> </li>
                    <li class="list-inline-item"><a href="">Contacto  | </a> </li>
                    <li class="list-inline-item"><a href="">Blog   </a> </li>
                </ul>
            </div>
            <div class="col-12 text-center mt-n2">
                <span class="barra-contacto__title">CONTACTO</span>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="">Tel: 5578994922 | </a> </li>
                    <li class="list-inline-item"><a href="">Mail: crediapoyo.sep.gob@gmail.com
                        </a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="" class="text-white">Aviso Legal |</a> </li>
                    <li class="list-inline-item"><a href="" class="text-white">  Aviso de privacidad | </a> </li>
                    <li class="list-inline-item"><a href="" class="text-white">  Productos Garantizados por el IPAB | </a> </li>
                    <li class="list-inline-item"><a href="" class="text-white">  Portabilidad Nómina  | </a> </li>
                    <li class="list-inline-item"><a href="" class="text-white">  Consulta los Costos y las Comisiones de nuestros productos  </a> </li>

                </ul>
            </div>
            <div class="col-12 text-center">
                <p>© 2019 CrediApoyo Inc Términos y Condiciones
                </p>
            </div>
        </div>
    </div>
</div>
{{-- /footer--}}

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/rangeslider/rangeslider.min.js') }}"></script>
@yield('add_js')
</body>
</html>
