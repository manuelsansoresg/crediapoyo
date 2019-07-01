@extends('layouts.default')
@section('title', 'Contacto')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/contacto/Foto_1_Contacto.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-contacto ">
                    <span class="carousel-caption-contacto__title">Contacto</span>
                    <div class="carousel-caption-contacto__description mt-n2 mt-md-n4">
                        <p>Ahora que tú nos conoces, queremos conocerte a ti para empezar a hacer juntos tus sueños realidad. Por ello estamos listos para recibirte en cualquiera de nuestras sucursales.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="contacto">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <img class="contacto__icon mt-n3" src="{{ asset('img/contacto/Ubicacion.png') }}" alt="">
                    <span class="contacto__title ">Chiapas</span>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="contacto__ul">
                        <li>
                            Tuxtla: Centro de Negocios Plaza Mirador oficina 4, Libramiento Norte Poniente, Col. Miravalle, Tuxtla, Gtz. Chiapas C.P. 29039 <p class="color-blue3">Teléfono: 01-961-617-5204</p>
                        </li>
                        <li>
                            Tapachula: Av. Central No.162 entre 23 y 25 Pte. Col. Centro, Tapachula, Chiapas C.P. 30700 <p class="color-blue3">Teléfono: 01-962-642-7971</p>
                        </li>
                        <li>
                            Palenque: Av. 20 de Noviembre S/N entre Abasolo e Independencia Col. Centro, Palenque, Chiapas C.P. 29960 <p class="color-blue3">Teléfono: 01-916-345-4277</p>

                        </li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <img class="contacto__icon mt-n3" src="{{ asset('img/contacto/Ubicacion.png') }}" alt="">
                    <span class="contacto__title ">Tamaulipas</span>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="contacto__ul">
                        <li>
                            Cd. Victoria: Calle Alberto Carrera Torres esq. con Matías S. Canales 513 Col. Centro, Cd. Victoria, Tamps C.P. 87000 <p class="color-blue3">Teléfono: 01-834-186-5574 y 01-834-185-3728</p>
                        </li>
                        <li>
                            Tampico: Av. Hidalgo 3602 Local B, Col. Las Flores Esq. Calle Gardenia, Dentro de la Gasolinera Tampico, Tamps. C.P. 89220 <p class="color-blue3">Teléfono: 01-833-561-9856 y 01-833-362-3078 </p>
                        </li>
                        <li>
                            Reynosa: Av. Heron Ramírez 545 B, Col. Rodríguez Reynosa, Tamaulipas C.P. 88630 <p class="color-blue3">Teléfono: 01-899-202-1722 </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <img class="contacto__icon mt-n3" src="{{ asset('img/contacto/Ubicacion.png') }}" alt="">
                    <span class="contacto__title ">Michoacán</span>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="contacto__ul">
                        <li>
                            Morelia y Zamora: Av. Siervo de la Nación 721, Col. Lomas del Valle, Morelia, Michoacán C.P. 58170 <p class="color-blue3"> Teléfono: 01-443-299-8459 </p>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        {{-- cotizador--}}
        @include('cotizador')
        {{-- /cotizador--}}
    </div>
@endsection
@section('add_js')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection