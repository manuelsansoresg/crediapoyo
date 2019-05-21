@extends('layouts.default')

@section('content')
    {{-- slider--}}
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            {{--<ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>--}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/Foto_H1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption  carousel-caption-home d-none d-md-block">
                        <div class=" carousel-caption-home__right">
                            <img src="{{ asset('img/icon_slider/'.$slider_content->icon) }}" id="slider-icon" alt="">
                            <h4 class="carousel-caption-home__title mt-3" id="slider-title">{{ $slider_content->title }}</h4>
                            <p class="carousel-caption-home__descripcion text-justify" id="slider-content">
                                {{ $slider_content->content }}

                            </p>
                            <p> <button class="btn btn-primary">CONOCER MÁS</button> </p>
                            <ul class="list-inline ">
                                <?php  $cont = 0;?>
                                @foreach($sliders_all as $slider_all)
                                    <?php  $cont = $cont +1 ;?>
                                    {{-- {{ $cont }}--}}
                                    <?php $active = ($cont == 1)? 'text-success' : ''; ?>
                                    <li class="list-inline-item"><a data-code="{{ $slider_all->id }}" class="item"><i id="fa-{{ $slider_all->id }}" class="fas fa-circle  {{ $active }} " data=""></i></a> </li>

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
                </div>
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
            <div class="row">
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
                <div class="col-12 col-md-5">
                    <img class="img-fluid" src="{{ asset('img/Formulario.png') }}" alt="">
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
                        En Crediapoyo creemos que cada préstamo otorgado es la oportunidad de hacer realidad un sueño. Por eso cada miembro de nuestro equipo enfoca sus esfuerzos para que los sueños se sigan cumpliéndose.

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

                        <div style="position: relative; background: url('{{ asset('img/Blog_1.png') }}')no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover; background-size: cover; height: 270px">
                            <div class="blog__card-content-title">
                                <p class="blog__card-title text-white">
                                    Título de la noticia del blog
                                </p>
                            </div>
                        </div>

                        <div class="card-body shadow card-body-ca">
                            <div class="card-text mt-4 blog__content-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur corporis deserunt distinctio dolorem enim eos fugit libero molestiae mollitia nemo neque odio qui ratione rerum totam, unde, vero. Molestias.
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, adipisci architecto culpa excepturi ipsum labore quis repellat tempore tenetur! Nemo?
                            </div>
                            <p>
                                <a class="link-green float-right" >Leer Más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0 ">
                    {{-- noticia 2 derecha--}}
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 px-0">
                                <div style="background: url('{{ asset('img/Blog_2.png')  }}') no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover; background-size: cover; height: 250px">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 card  card-ca shadow">
                                <div class="card-body">
                                    <h5 class="card-title blog__card-title2"> Título de la noticia del blog 2 </h5>
                                    <div class="card-text blog__content-small-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur corporis cum dolorum excepturi fugiat inventore, laboriosam maiores nam necessitatibus nihil pariatur perspiciatis possimus quae repellat repudiandae soluta, ut veniam.
                                    </div>
                                    <div class="card-read-more">
                                        <p><a class="link-green float-right" >Leer Más</a></p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        {{-- /noticia 2 derecha--}}
                        {{-- noticia 3 derecha--}}
                        <div class="row mt-3">
                            <div class="col-12  col-md-4 px-0">
                                <div style="background: url('{{ asset('img/Blog_3.png')  }}') no-repeat center center; -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover; background-size: cover; height: 243px">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 card  card-ca shadow">
                                <div class="card-body">
                                    <h5 class="card-title blog__card-title3"> Título de la noticia del blog 3 </h5>
                                    <div class="card-text blog__content-small2-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur corporis cum dolorum excepturi fugiat inventore, laboriosam maiores nam necessitatibus nihil pariatur perspiciatis possimus quae repellat repudiandae soluta, ut veniam.
                                    </div>
                                    <div class="card-read-more">
                                        <p><a class="link-green float-right" >Leer Más</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- /noticia 3 derecha--}}
                </div>
            </div>

        </div>
    </div>
    {{-- /blog--}}
    <div class="barra-contacto mt-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="barra-contacto__title">MENÚ</span>
                </div>
                <div class="col-12 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="">Home |</a> </li>
                        <li class="list-inline-item"><a href="">¿Quiénes somos? | </a> </li>
                        <li class="list-inline-item"><a href="">¿Dónde estamos? | </a> </li>
                        <li class="list-inline-item"><a href="">Soluciones Financieras | </a> </li>
                        <li class="list-inline-item"><a href="">Contacto  | </a> </li>
                        <li class="list-inline-item"><a href="">Blog   </a> </li>
                    </ul>
                </div>
                <div class="col-12 text-center mt-n2">
                    <span class="barra-contacto__title">CONTACTO</span>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="">Tel: 5578994922 | </a> </li>
                        <li class="list-inline-item"><a href="">Mail: crediapoyo.sep.gob@gmail.com
                            </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection