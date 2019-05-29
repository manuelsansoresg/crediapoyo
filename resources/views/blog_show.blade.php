@extends('layouts.default')
@section('title', 'Blog')

@section('content')
    <div class="blog-show">
        <div  style="background: url('{{ asset('img/diseccion_blog/Blog1.png') }}') no-repeat center center; width: 100%; height:90vh;  -webkit-background-size: cover;  -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center blog-show__top-title">
                        <div class="blog-show__title">

                        </div>
                        <div class="blog-show__subtitle mt-5">
                            {{ $blog->title }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container blog-show__content shadow">
            <div class="row">
                <div class="col-12">
                    {!! $blog->contenido !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        {{-- solicita tu credito   --}}
        @include('form_solicita_credito')
        {{-- /solicita tu credito   --}}
    </div>
@endsection
