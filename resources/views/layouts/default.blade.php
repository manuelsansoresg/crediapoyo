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
                    <a class="nav-link nav-item-border-two text-uppercase" href="/quienes-somos">¿Quiénes <div class="d-inline d-md-block"></div> SOMOS?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-item-border-two text-uppercase" href="/donde-estamos">¿Dónde <div class="d-inline d-md-block"></div> ESTAMOS? </a>
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

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <a href="/buro"><img class="img-fluid col-5 col-md-2 zoom" src="/img/LOGO_BURO.png" alt=""></a>
                <a href="https://www.gob.mx/condusef" target="_blank"><img class="img-fluid col-5 col-md-2 zoom" src="/img/condusef.png" alt=""></a>
            </div>
        </div>
    </div>


    {{-- footer--}}
    <div class="barra-contacto mt-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="barra-contacto__title">MENÚ</span>
                </div>
                <div class="col-12 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/">Home |</a> </li>
                        <li class="list-inline-item"><a href="/quienes-somos">¿Quiénes somos? | </a> </li>
                        <li class="list-inline-item"><a href="/donde-estamos">¿Dónde estamos? | </a> </li>
                        <li class="list-inline-item"><a href="/soluciones-financieras">Soluciones Financieras | </a> </li>
                        <li class="list-inline-item"><a href="/contacto">Contacto | </a> </li>
                        <li class="list-inline-item"><a href="/blog">Blog | </a> </li>
                        <li class="list-inline-item"><a href="/afiliate">Afiliate </a> </li>
                    </ul>
                </div>
                <div class="col-12 text-center mt-n2">
                    <span class="barra-contacto__title">Comentarios y Sugerencias</span>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="tel:5578994922">Tel: 5578994922 | </a> </li>
                        <li class="list-inline-item"><a href="mailto:crediapoyo.sep.gob@gmail.com">Mail: crediapoyo.sep.gob@gmail.com
                            </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-1">
                    <small>
                        Baracaf, S.A. de C.V., SOFOM, E.N.R., no requiere para su constitución y
                        operación autorización de la Secretaría de Hacienda y Crédito Público, y está
                        sujeta a la supervisión de la Comisión Nacional Bancaria y de Valores, únicamente en materia de prevención y detección de Operaciones con Recursos de Procedencia Ilícita, Terrorismo y Terrorismo Internacional, de conformidad al artículo 56 de la Ley General de Organizaciones y Actividades Auxiliares del Crédito.

                    </small>
                </div>
                <div class="w-100"></div>
                <div class="mt-4 col-12  text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/aviso-de-privacidad" class="text-white"> Aviso de Privacidad | </a> </li>
                        <li class="list-inline-item"><a href="#" class="text-white"> Consulta los Costos y las Comisiones de Nuestros Productos | </a> </li>
                        <li class="list-inline-item"><a href="/requisitos-de-contratacion" class="text-white"> Requisitos de Contratación | </a> </li>
                        <li class="list-inline-item"><a href="/atencion-une" class="text-white"> Unidad Especializada de Atención a Usuarios UNE </a> </li>

                    </ul>
                </div>
                <div class="col-12 text-center">
                    <p>© 2019 CrediApoyo Inc <a href="/terminos-y-condiciones" class="text-white">Términos y Condiciones</a>
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