@extends('layouts.default')
@section('title', 'Blog')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/diseccion_blog/Blog1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-blog ">
                    <div class="carousel-caption-blog__content">
                        <div class="carousel-caption-blog__title">
                            <span>Como viajar con poco</span>
                        </div>
                        <div class="carousel-caption-blog__subtitle">
                            <span>Di<span class="text-white">ne</span>ro </span>
                        </div>

                        <div class="carousel-caption-blog__description mt-n2 mt-md-n4">
                            <p class="my-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus architecto blanditiis deleniti deserunt dolor dolorum excepturi exercitationem impedit laboriosam necessitatibus.
                            </p>
                            <div class="d-block float-right">
                                <a href="#" class="btn btn-outline-info carousel-caption-blog__btn carousel-caption-blog__btn-carousel">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="section-blog mt-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div style="height: 400px;" class="shadow mx-3 my-3 col-md-2">

                        <div class="row">
                            <div class="col-md-12"  style="position: relative; background: url('{{ asset('img/diseccion_blog/Blog2.png') }}') no-repeat center center; height: 410px;  -webkit-background-size: cover;  -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
                                <div class="section-blog__content">
                                    <span class="section-blog__title">{{ Str::limit($blog->title, 30) }}</span>
                                    <p class="section-blog__description">
                                        {!!  strip_tags(Str::limit($blog->contenido, 200))  !!}
                                    </p>
                                    <div class="mt-4">
                                        <a href="/blog/{{ $blog->slug }}" class="btn btn-outline-info carousel-caption-blog__btn">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>

        </div>
        <div class="container">
            {{-- solicita tu credito   --}}
            @include('form_solicita_credito')
            {{-- /solicita tu credito   --}}
            {{-- cotizador--}}
            @include('cotizador')
            {{-- /cotizador--}}
        </div>
    </div>
    <div class="w-100 pb-5"></div>
@endsection

@section('add_js')
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection