@extends('layouts.default')

@section('title', 'donde estamos')
@section('content')
<div class="soluciones-financieras">
    <div class="soluciones-financieras__fondo1">
        <div class="soluciones-financieras__content">
            <span class="soluciones-financieras__title">Préstamo al</span>
            <span class="soluciones-financieras__subtitle">Consumo</span>
            <span class="soluciones-financieras__subtitle2">Descuento vía nómina</span>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-around">
                <div class="text-center">
                    <img class="soluciones-financieras__icons" src="{{ asset('img/soluciones_financieras/Mano.png') }}" alt="">
                    <span class="d-block soluciones-financieras__text-icons">Sin complicaciones</span>
                </div>
                <div class="text-center">
                    <img class="img-fluid col-12 col-md-9" src="{{ asset('img/soluciones_financieras/Flechas.png') }}" alt="">

                </div>
                <div class="text-center">
                    <img class="soluciones-financieras__icons" src="{{ asset('img/soluciones_financieras/Mano_Monedas.png') }}" alt="">
                    <span class="d-block soluciones-financieras__text-icons">Pagos Fijos</span>
                </div>
                <div>
                    <img class="img-fluid col-12 col-md-9" src="{{ asset('img/soluciones_financieras/Flechas.png') }}" alt="">
                </div>
                <div class="text-center">
                    <img class="soluciones-financieras__icons" src="{{ asset('img/soluciones_financieras/estrellas.png') }}" alt="">
                    <span class="d-block soluciones-financieras__text-icons">El préstamo que necesitas</span>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 soluciones-financieras__legales">
                <p>*Incumplir tus obligaciones te puede generar comisiones e intereses moratorios.</p>
                <p>*Contratar créditos por arriba de tu capacidad de pago puede afectar tu historial.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12"></div>
        </div>
    </div>
    <div class="container-fluid d-none">
        <div class="row mt-5">
            <div class="col-12 col-md-6 soluciones-financieras__ventajas-left">

            </div>
            <div class="col-12 col-md-6 soluciones-financieras__ventajas pb-5 pb-md-0">
                <div class="soluciones-financieras__title-ventajas">
                    <span>Ven</span><span class="text-white">tajas</span>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="soluciones-financieras__ul-ventajas">
                            <li>
                                Lorem ipsum dolor sit amet, consectetur.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur.
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="soluciones-financieras__ul-ventajas">
                            <li>
                                Lorem ipsum dolor sit amet, consectetur.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="requisitos pb-5 d-none">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-4">
                    <img class="requisitos__icon mt-n4" src="{{ asset('img/soluciones_financieras/Requisitos.png') }}" alt="">
                    <span class="requisitos__title ml-2">Requisitos</span>
                    <div class="row">
                        <div class="col-12">
                        <span>
                            Hacer tus sueños realidad con Crediapoyo es muy fácil. Sólo acércate a cualquiera de nuestros asesores financieros y con gusto te orientaremos. Para ser candidato es necesario contar con los siguientes requisitos:

                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <ul class="requisitos__ul">
                        <li>
                            Trabajar en cualquiera de las dependencias con las que tenemos convenio.

                        </li>
                        <li>
                            Encontrarse dentro del rango de entre 20 a 65 años de edad.

                        </li>
                        <li>
                            No exceder los 30 años de servicio en el caso de personas de sexo masculino, y 28 en el caso de personas de sexo femenino.

                        </li>
                        <li>
                            Proporcionar la documentación requerida en original

                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <span class="requisitos__documentacion-title">Documentación</span>
                    <ul class="requisitos__ul">
                        <li>
                            <span>Identificación válida</span>
                            <span class="requisitos__li-italic d-block"> (INE, pasaporte o cédula profesional) </span>
                        </li>
                        <li>
                            Comprobante de pago de las últimas dos quincenas

                        </li>
                        <li>
                           <span> Comprobante de domicilio </span>
                            <span class="requisitos__li-italic d-block">
                                 (luz, agua, teléfono fijo, televisión de paga), con un tiempo de facturación no mayor a 90 días.

                            </span>

                        </li>
                        <li>
                            Estado de cuenta bancario a nombre del titular del préstamo, de la cuenta en donde recibe el depósito de su nómina, con cuenta clabe para transferencia interbancaria, con una vigencia de no más de 90 días de emisión.


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- solicita tu credito   --}}
        @include('form_solicita_credito')
        {{-- /solicita tu credito   --}}
    </div>

    {{-- cotizador--}}
    @include('cotizador')
    {{-- /cotizador--}}

</div>

@endsection

@section('add_js')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection