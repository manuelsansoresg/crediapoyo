<div class="row mt-5">
    <div class="col-12 col-md-5">
        <img class="img-fluid" src="{{ asset('img/Formulario.png') }}" alt="">
    </div>
    {{-- formulario--}}
    <div class="col-2 col-md-1">
        <img class="img-fluid" src="{{ asset('img/Icono_Formulario.png') }}" alt="">
    </div>
    <div class="col-12 col-md-6">
            <span class="solicita-credito__title">
                Solicita tu crédito en línea
            </span>
        <span class="solicita-credito__subtitle mt-n2 mt-md-n3">Nosotros te respondemos en menos de 24 hrs </span>
        <div class="row">
            {{--formulario--}}
            <div class="col-12 col-md-12 ">

                <form action="">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombre_completo" placeholder="Nombre completo" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 ">
                            <input type="text" name="rfc" placeholder="RFC PIRE191090" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                            <input type="text" name="homoclave" placeholder="Homoclave p45" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 col-md-6">
                            <input type="text" name="mail" placeholder="Mail" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                            <input type="text" name="telefono" placeholder="Teléfono" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" name="estado" placeholder="Estado" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" name="dependencia" placeholder="Dependencia" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" name="pregunta1" placeholder="¿En que horario te podemos contactar?" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" name="pregunta2" placeholder="¿Como prefieres que te contactemos?" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 col-md-9">
                            <div class="form-group form-check mb-0">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">He leído el aviso de privacidad</label>
                            </div>

                            <div class="form-group form-check mb-0">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Deseo recibir información de Crediapoyo</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-3 mt-md-2">
                            <button class="btn btn-primary btn-form">ENVIAR</button>
                        </div>
                    </div>


                </form>
            </div>
            {{--formulario--}}
        </div>
    </div>

    {{-- /formulario--}}
</div>