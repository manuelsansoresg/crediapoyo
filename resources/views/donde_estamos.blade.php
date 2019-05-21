@extends('layouts.default')

@section('title', 'donde estamos')
@section('content')
<div class="container donde-estamos pb-5">
    <div class="row">
        <div class="col-10 col-md-8">
            <div class="mt-5">
                <img class="img-fluid" src="{{ asset('img/donde_estamos/mapa.png') }}" alt="">
            </div>
        </div>
        <div class="col-2 col-md-4 donde-estamos__content-left">
            <div class="mt-5">
                <span class="donde-estamos__title">¿Donde</span>
                <span class="donde-estamos__subtitle d-md-block">estamos?</span>
                <span class="donde-estamos__content">
            </span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-md-flex justify-content-center">
            <div class="col-12 col-md-3 donde-estamos__ul-border-left">
                <div class="text-center">
                    <span class="donde-estamos__title-list">Chiapas</span>
                </div>
                <ul class="donde-estamos__ul-ubicaciones ">
                    <li>Tuxtla</li>
                    <li>Tapachula</li>
                    <li>Palenque</li>
                </ul>
            </div>

            <div class="col-12 col-md-3 donde-estamos__ul-border-left">
                <div class="text-center">
                    <span class="donde-estamos__title-list">Tamaulipas</span>
                </div>
                <ul class="donde-estamos__ul-ubicaciones">
                    <li> Cd. Victoria</li>
                    <li>Tampico</li>
                    <li>Reynosa</li>
                </ul>
            </div>

            <div class="col-12 col-md-3 donde-estamos__ul-border-left donde-estamos__ul-border-right">
                <div class="text-center">
                    <span class="donde-estamos__title-list">Michoacán</span>
                </div>
                <ul class="donde-estamos__ul-ubicaciones">
                    <li> Morelia </li>

                </ul>
            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <span class="donde-estamos__title-dep">Dependencias</span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 d-flex  justify-content-around">
            <div>
                <img class="img-fluid px-3" src="{{ asset('img/donde_estamos/SNTE_7.png') }}" alt="">
            </div>
            <div>
                <img class="img-fluid px-3" src="{{ asset('img/donde_estamos/Tam_Gob.png') }}" alt="">
            </div>
            <div>
                <img class="img-fluid px-3" src="{{ asset('img/donde_estamos/SNTE_18.png') }}" alt="">
            </div>
            <div>
                <img class="img-fluid px-3" src="{{ asset('img/donde_estamos/Tam_Salud.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- solicita tu credito   --}}
    @include('form_solicita_credito')
    {{-- /solicita tu credito   --}}
</div>
    @include('cotizador')
@endsection


@section('add_js')
    <script src="{{ asset('js/slider.js') }}"></script>

@endsection