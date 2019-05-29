<div class="row mt-5">
    <div class="col-12 col-md-5">
        <img class="img-fluid" src="{{ asset('img/Formulario.png') }}" alt="">
    </div>
    <div class="col-md-7">
        <div class="row mt-3 mt-md-0">
            {{-- formulario--}}
            <div class="col-2 col-md-2 text-md-right">
                <img class="solicita-credito__icon" src="{{ asset('img/Icono_Formulario.png') }}" alt="">
            </div>
            <div class="col-10 col-md-10">
                <span class="solicita-credito__title">
                    Solicita tu crédito en línea
                </span>
                    <span class="solicita-credito__subtitle mt-n2 mt-md-n3">Nosotros te respondemos en menos de 24 hrs </span>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3 mt-md-0">
                <div class="col-12 col-md-10 offset-md-2">
                    <form action="" method="post" id="form-solicita">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nombre_completo" placeholder="Nombre completo" class="form-control text-white">

                            <small class="text-danger nombre_completo error-solicita"></small>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 ">
                                <input type="text" name="rfc" placeholder="RFC PIRE191090" class="form-control text-white">
                                <small class="text-danger rfc error-solicita"></small>
                            </div>
                            <div class="col-12 col-md-6 mt-3 mt-md-0">
                                <input type="text" name="homoclave" placeholder="Homoclave p45" class="form-control text-white">
                                <small class="text-danger homoclave error-solicita"></small>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-md-6">
                                <input type="text" name="correo" placeholder="Mail" class="form-control text-white">
                                <small class="text-danger correo error-solicita"></small>
                            </div>
                            <div class="col-12 col-md-6 mt-3 mt-md-0">
                                <input type="text" name="telefono" placeholder="Teléfono" class="form-control text-white">
                                <small class="text-danger telefono error-solicita"></small>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                {{--<input type="text" name="estado" placeholder="Estado" class="form-control">--}}
                                <select name="state" id="solicita_state"   class="form-control text-white">
                                    <option value="">Seleccione un estado</option>
                                    <?php $states = state() ?>

                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}"> {{ $state->name }} </option>
                                    @endforeach
                                </select>
                                <small class="text-danger state error-solicita"></small>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <select name="dependency" id="solicita_dependency" class="form-control text-white input-gray" disabled="">
                                    <option value="">Seleccione una dependencia </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="text" name="horario" placeholder="¿En que horario te podemos contactar?" class="form-control text-white">
                                <small class="text-danger horario error-solicita"></small>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="text" name="pregunta2" placeholder="¿Como prefieres que te contactemos?" class="form-control text-white">
                            </div>
                        </div>
                        <div class="row" id="spinner-registro" style="display: none">
                            <div class="col-12 text-center mt-2">
                                <i class="fas fa-spinner fa-spin text-success"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-9">
                                <div class="form-group form-check mb-0">
                                    <input type="checkbox" name="aviso" value="true" class="form-check-input" >
                                    <label class="form-check-label">He leído el <a href="/aviso-de-privacidad" target="_blank">aviso de privacidad</a> </label>
                                    <p>
                                        <small class="text-danger aviso error-solicita"></small>
                                    </p>
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
            </div>
        </div>

    </div>


    {{-- /formulario--}}
</div>