@extends('layouts.default')

@section('content')
    {{-- slider--}}
    <div class="bd-example">
        <div class="d-sm-block d-md-none carousel-caption-home">
            <div class=" carousel-caption-home__right">
                <img src="{{ asset('img/icon_slider/'.$slider_content->icon) }}" class="slider-icon" id="" alt="">
                <h5 class="carousel-caption-home__title mt-3 text-uppercase slider-title" id="">{{ $slider_content->title }}</h5>
                <p class="carousel-caption-home__descripcion text-justify slider-content" id="">
                    {{ $slider_content->content }}

                </p>
                <p> <button class="btn btn-primary">CONOCER MÁS</button> </p>
                <ul class="list-inline ">
                    <?php  $cont = 0;?>
                    @foreach($sliders_all as $slider_all)
                        <?php  $cont = $cont +1 ;?>
                        {{-- {{ $cont }}--}}
                        <?php $active = ($cont == 1)? 'text-success' : ''; ?>
                        <li class="list-inline-item">
                            <a data-code="{{ $slider_all->id }}" class="item">
                                <i id="" class="fas fa-circle fa-{{ $slider_all->id }}  {{ $active }}  " data=""></i>
                            </a> 
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            {{--<ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>--}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/Foto_H1.png') }}" class="d-none d-md-block w-100" alt="...">
                    <div class="carousel-caption  carousel-caption-home">
                        <div class=" carousel-caption-home__right">
                            <img src="{{ asset('img/icon_slider/'.$slider_content->icon) }}" class="slider-icon" alt="">
                            <h5 class="carousel-caption-home__title mt-3 text-uppercase slider-title" id="">{{ $slider_content->title }}</h5>
                            <p class="carousel-caption-home__descripcion text-justify slider-content" id="">
                                {{ $slider_content->content }}

                            </p>
                            <p> <button class="btn btn-primary">CONOCER MÁS</button> </p>
                            <ul class="list-inline ">
                                <?php  $cont = 0;?>
                                @foreach($sliders_all as $slider_all)
                                    <?php  $cont = $cont +1 ;?>
                                    {{-- {{ $cont }}--}}
                                    <?php $active = ($cont == 1)? 'text-success' : ''; ?>
                                    <li class="list-inline-item"><a data-code="{{ $slider_all->id }}" class="item"><i id="" class="fas fa-circle fa-{{ $slider_all->id }}  {{ $active }} " data=""></i></a> </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                {{--<div class="carousel-item">
                    <img src="{{ asset('img/Foto_H1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>Formulario
                <div class="carousel-item">
                    <img src="{{ asset('img/Foto_H1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>--}}
            </div>
            {{--<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>--}}
        </div>
    </div>
    {{-- /slider--}}
    {{-- solicita credito--}}
    <div class="solicita-credito mt-3">
        <div class="container">
            <div class="row ">
                <div class="col-2 col-md-1">
                    <img class="img-fluid" src="{{ asset('img/Icono_Formulario.png') }}" alt="">
                </div>
                <div class="col-10 col-md-6">
                    <span class="solicita-credito__title">
                        Solicita tu crédito en línea
                    </span>
                    <span class="solicita-credito__subtitle mt-n2 mt-md-n3">Nosotros te respondemos en menos de 24 hrs </span>
                </div>
                <div class="col-12 col-md-6 offset-md-1">

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
                <div class="col-12 col-md-5 ">
                    <img class="img-fluid mt-3 mt-md-0 "  src="{{ asset('img/Formulario.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- /solicita credito--}}

    {{-- oferta--}}
    <div class="oferta mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <img class="img-fluid" src="{{ asset('img/Oferta_de_valor.png') }}" alt="">
                </div>
                <div class="col-md-5 offset-md-1 py-5">
                    <p class="oferta__title text-uppercase"> Oferta de valor </p>
                    <p class="text-white oferta__description">
                        En Crediapoyo creemos que cada préstamo otorgado es la oportunidad de hacer realidad un sueño. Por eso cada miembro de nuestro equipo enfoca sus esfuerzos para que los sueños se sigan cumpliendo.

                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- /oferta--}}

    {{-- blog--}}
    <div class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="blog__title "> <img class="blog__icon" src="{{ asset('img/Blog.png') }}" alt=""> TEMAS RELEVANTES </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-6">
                    <div class="card card-ca">

                        <div style="position: relative; background: url('{{ asset('img/blog').'/'.$blog_destacado[0]->portada }}')no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover; background-size: cover; height: 270px">
                            <div class="blog__card-content-title">
                                <p class="blog__card-title text-white">
                                    {{ $blog_destacado[0]->title }}
                                </p>
                            </div>
                        </div>

                        <div class="card-body shadow card-body-ca">
                            <div class="card-text mt-4 blog__content-text">
                               {!! Str::limit(strip_tags($blog_destacado[0]->contenido), 300 )!!}
                            </div>
                            <p>
                                <a href="/blog/{{ $blog_destacado[0]->slug }}" class="link-green float-right" >Leer Más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0 ">
                    {{-- noticia 2 derecha--}}
                    <div class="container">
                        @if(isset($blog_destacado[1]))
                        <div class="row">
                            <div class="col-12 col-md-4 px-0">
                                <div style="background: url('{{ asset('img/blog').'/'.$blog_destacado[1]->portada }}') no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover; background-size: cover; height: 250px">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 card  card-ca shadow">
                                <div class="card-body">
                                    <h5 class="card-title blog__card-title2"> {{ $blog_destacado[1]->title }} </h5>
                                    <div class="card-text blog__content-small-text">
                                        {!! Str::limit(strip_tags($blog_destacado[1]->contenido), 200) !!}
                                    </div>
                                    <div class="card-read-more">
                                        <p><a href="/blog/{{ $blog_destacado[1]->slug }}" class="link-green float-right" >Leer Más</a></p>
                                    </div>

                                </div>

                            </div>

                        </div>
                        @endif
                        {{-- /noticia 2 derecha--}}
                        {{-- noticia 3 derecha--}}
                        @if(isset($blog_destacado[2]))
                        <div class="row mt-3">
                            <div class="col-12  col-md-4 px-0">
                                <div style="background: url('{{ asset('img/blog').'/'.$blog_destacado[2]->portada }}') no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover; background-size: cover; height: 243px">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 card  card-ca shadow">
                                <div class="card-body">
                                    <h5 class="card-title blog__card-title3"> {{ $blog_destacado[2]->title }} </h5>
                                    <div class="card-text blog__content-small2-text">
                                        {!! Str::limit(strip_tags($blog_destacado[2]->contenido), 200) !!}
                                    </div>
                                    <div class="card-read-more">
                                        <p><a href="/blog/{{ $blog_destacado[2]->slug }}" class="link-green float-right" >Leer Más</a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        @endif
                    </div>
                    {{-- /noticia 3 derecha--}}
                </div>
            </div>

        </div>
    </div>
    {{-- /blog--}}
    <div class="container">
        @include('cotizador')
    </div>

@endsection


@section('add_js')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection