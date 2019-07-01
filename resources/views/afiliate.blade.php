@extends('layouts.default')
@section('title', 'Afiliate')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/afiliate/H1_Afiliate.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-afiliate">
                    <div class="carousel-caption-afiliate__content">
                        <div class="carousel-caption-afiliate__title">
                            {{--<span class="text-white">Se</span> <span class="ml-3"> promotor</span>--}}
                            <img class="img-fluid" src="{{ asset('img/afiliate/SePromotor.png') }}" alt="">
                        </div>
                        <div class="carousel-caption-afiliate__subtitle mt-n0  mt-2 mt-md-2">
                            <p class="my-0">¡No te quedes fuera!</p>
                        </div>
                        <div class="carousel-caption-afiliate__description">
                            <p class="my-0 mt-0 mt-md-2">
                                Únete a la gran familia de Crediapoyo y haz realidad tus sueños cumpliendo los de los demás.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="afiliate">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <img class="contacto__icon mt-n4" src="{{ asset('img/afiliate/Requisitos.png') }}" alt="">
                    <span class="contacto__title ml-2">Requisitos</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <ul class="afiliate__ul">
                        <li> Gusto por las ventas y <span class="d-md-block">el trabajo de campo.</span> </li>
                        <li>Hombres y mujeres a partir <span class="d-md-block">de 25 años. </span> </li>
                        <li>Necesidades de ingresos <span class="d-md-block">superiores a los $ 12,000 MXN.</span> </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <ul class="afiliate__ul">
                        <li> Ser sociable y proactivo.  </li>
                        <li> Nivel de estudios entre <span class="d-md-block">  secundaria y preparatoria. </span></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <ul class="afiliate__ul">
                        <li> Comprometido con el <span class="d-md-block">servicio a clientes. </span> </li>
                        <li>Manejo adecuado del tiempo </li>
                    </ul>
                </div>
                <div class="col-12 text-center mt-5">
                    <p class="afiliate__title1 pb-0 mb-0">Acude a tu sucursal más cercana y ¡afíliate!</p>
                    <p class="afiliate__subtitle1 mt-0 pt-0"><a href="/contacto">Consulta nuestras sucursales</a></p>
                </div>
                <div class="w-100 pb-5"></div>
            </div>
            {{-- solicita tu credito   --}}
            @include('form_solicita_credito')
            {{-- /solicita tu credito   --}}
            {{-- cotizador--}}
            @include('cotizador')
            {{-- /cotizador--}}
        </div>
    </div>

@endsection

@section('add_js')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection
