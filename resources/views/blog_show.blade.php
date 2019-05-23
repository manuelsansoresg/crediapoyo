@extends('layouts.default')
@section('title', 'Blog')

@section('content')
    <div class="blog-show">
        <div  style="background: url('{{ asset('img/diseccion_blog/Blog1.png') }}') no-repeat center center; width: 100%; height:90vh;  -webkit-background-size: cover;  -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center blog-show__top-title">
                        <div class="blog-show__title">
                            Como viajar con poco
                        </div>
                        <div class="blog-show__subtitle">
                            Di<span class="text-white">ne</span>ro
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container blog-show__content shadow">
            <div class="row">
                <div class="col-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam, eos et exercitationem facilis ipsam laudantium magnam modi natus necessitatibus, neque porro praesentium quibusdam quidem, quis quos sunt unde voluptas!
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
