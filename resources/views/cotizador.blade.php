<div class="cotizador">
    <div class="container">
        <div class="row mt-5 pb-5">
            <div class="col-12 d-flex justify-content-center align-content-center">
                <div>
                    <img class="cotizador__icon" src="{{ asset('/img/soluciones_financieras/Cotizador.png') }}" alt="">
                </div>
                <div>
                    <span class="cotizador__title ml-3">Cotizador</span>
                </div>
            </div>
            <div class="w-100 pb-4"></div>
            <div class="col-12 col-md-4">
                <div class="row pb-3">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-7 text-center">
                                <span class="cotizador__subtitle">
                                ¿Cuánto dinero necesitas?
                            </span>
                        </div>
                    </div>
                </div>
                <div class="cotizador__range">
                    <input id="cantidad" type="range" min="5000" value="5000" max="200000"  step="500">
                </div>
                <div class="row mt-4">

                    <div class="col-4">
                        <small class="text-muted">$5000</small>
                    </div>
                    <div class="col-4 text-center">
                        <small class="text-muted" id="valor"></small>
                    </div>
                    <div class="col-4 text-right">
                        <small class="text-muted">$200000</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row pb-3">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-7 text-center">
                                <span class="cotizador__subtitle">
                                Selecciona el plazo
                            </span>
                        </div>
                    </div>
                </div>
                <div class="cotizador__range">
                    <input id="plazo" type="range" min="1" value="1" max="96"  step="1">
                </div>
                <div class="row mt-4">

                    <div class="col-4">
                        <small class="text-muted">1 quincena</small>
                    </div>
                    <div class="col-4 text-center">
                        <small class="text-muted" id="valor_plazo"></small>
                    </div>
                    <div class="col-4 text-right">
                        <small class="text-muted">96</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <span class="cotizador__subtitle mt-2"> Abono semanal </span>
                <span class="cotizador__cantidad d-block mt-4">$2,400.00</span>
                <small class="text-muted mt-n5">2,300.00 sin IVA</small>
                <div class="d-block mt-3">
                    <button class="btn btn-primary cotizador__btn">Solicítalo</button>
                </div>
            </div>
        </div>
        {{--footer cotizador--}}
        <div class="row">
            <div class="col-12 col-md-2">
                <p class="my-0 cotizador__title-footer">A pagar</p>
                <p class="cotizador__title-footer-sub">8 semanas</p>
            </div>
            <div class="col-12 col-md-4">
                <p class="my-0 cotizador__title-footer">Cat Promedio</p>
                <p class="cotizador__title-footer-sub">
                    101.6% Sin IVA

                </p>
            </div>
            <div class="col-12 col-md-6 text-md-center">
                <p class="cotizador__info">
                    Calculadora para fines informativos y de comparación *Sobre pagos puntuales
                </p>
            </div>
        </div>
        {{-- /footer cotizador--}}
    </div>
</div>
