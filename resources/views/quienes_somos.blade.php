@extends('layouts.default')

@section('title', '¿Quiénes somos?')

@section('content')
<div class="quienes-somos">
   {{-- <div class="quienes-somos__video">

    </div>--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 text-center  ">
                <div class="row">
                    <div class="col-12 col-md-10 text-center mt-n5 mt-md-n5"><span class="quienes-somos__title-right">¡hola!</span></div>
                    <div class="col-12 col-md-1 quienes-somos__border-right d-none d-md-block"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 quienes-somos__content-left">
                <span class="quienes-somos__title">¿Quiénes</span>
                <span class="quienes-somos__subtitle  d-inline d-md-block mt-n5 mt-md-n3">Somos?</span>
                <div class="quienes-somos__content mt-n0 mt-md-n4">
                    <p>Somos Crediapoyo y hemos llegado para ayudarte, por ello te invitamos a conocer un poco de quiénes somos.</p>
                </div>
            </div>

        </div>

    </div>

    <div class="quienes-somos__content-foto">
        <div class="quienes-somos__foto-left">
            <img class="img-fluid" src="{{ asset('img/quienes_somos/Historia.png') }}" alt="">
        </div>
        <div class="quienes-somos__foto-right">
            <div class="quienes-somos__content-historia">
                <div>
                    <span class="quienes-somos__historia-title">Historia</span>
                </div>
                <div class="">
                    <p>
                        Somos una empresa que surge en abril de 2018 como una alternativa honesta y confiable para hacer realidad los sueños de los trabajadores mexicanos a través de un servicio cercano y que se adapte a las necesidades de cada persona.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 pb-5"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <div class="col-12 col-md-3 shadow bg-white quienes-somos__card">
                    <div class="text-center">
                        <img class="quienes-somos__icon" src="{{ asset('img/quienes_somos/Mision.png') }}" alt="">
                    </div>
                    <div class="text-center quienes-somos__card-title">Misión</div>
                    <div class="quienes-somos__card-content">
                        Lograr los sueños de nuestros clientes, alcanzaremos los de nosotros mismos. Cada miembro de nuestro equipo enfoca sus esfuerzos para que los sueños sigan existiendo y seguir creando posibilidades de éxito.

                    </div>
                </div>

                <div class="col-12 col-md-3 shadow bg-white quienes-somos__card ml-0 ml-md-5 mt-5 mt-md-0">
                    <div class="text-center">
                        <img class="quienes-somos__icon" src="{{ asset('img/quienes_somos/Vision.png') }}" alt="">
                    </div>
                    <div class="text-center quienes-somos__card-title">Visión</div>
                    <div class="quienes-somos__card-content">
                        Construir soluciones, impulsar proyectos e inspirar los sueños de nuestros clientes, es la tarea que nos hemos encomendado; 2023 será nuestra fecha objetivo para consolidar nuestra grandeza y lealtad, siendo la financiera con mayor reconocimiento por la calidad en el servicio que brindamos y los productos financieros que ofrecemos.


                    </div>
                </div>

                <div class="col-12 col-md-3 shadow bg-white quienes-somos__card ml-0 ml-md-5 mt-5 mt-md-0">
                    <div class="text-center">
                        <img class="quienes-somos__icon" src="{{ asset('img/quienes_somos/Valores.png') }}" alt="">
                    </div>
                    <div class="text-center quienes-somos__card-title">Valores</div>
                    <div class="quienes-somos__card-content">
                        <ul class="quienes-somos__ul">
                            <li>Respeto </li>
                            <li>Lealtad</li>
                            <li>Pertenencia </li>
                            <li>Trabajo en equipo</li>
                            <li>Congruencia</li>
                            <li>Honorabilidad</li>
                            <li> Calidez y Calidad </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="w-100 pb-5"></div>
        </div>
    </div>

</div>

@endsection