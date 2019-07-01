@extends('adminlte::page')

@section('title', 'Blog')


@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.css') }}">

    <section class="content-header">
        <h1>
            Blog
            <small>Nuevo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/blog">Blog</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Blog</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('flash::message')
                    {{ Form::open(['route' => ['blog.update', $blog->id], 'method' => 'PUT', 'files' => true]) }}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Título</label>
                            <input type="text" class="form-control" id="title" value="{{ $blog->title }}" name="title">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('title')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Meta</label>
                            <input type="text" class="form-control" id="meta" value="{{ $blog->meta }}" name="meta">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('meta')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Imágen de portada</label>
                            @if( $blog->portada == '' )
                                <input type="file" name="portada"  class="form-control">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('portada')}}</span>
                                @endif
                                @else
                                <img src="{{ asset('img/blog').'/'.$blog->portada_thumb }}" alt="">

                                <div class="row">
                                    <div class="col-md-11 text-right">
                                        <br>
                                        <a href="/admin/delete_portada/{{ $blog->id }}" class="btn btn-danger float-right">Borrar</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @if( $blog->listado == '' )
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imágen en listado</label>
                                <input type="file" name="imagen_listado" class="form-control">
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('imagen_listado')}}</span>
                                @endif
                            </div>
                        @else
                            <img  style="height: 225px" src="{{ asset('img/blog').'/'.$blog->listado }}" alt="">

                            <div class="row">
                                <div class="col-md-5 text-right">
                                    <br>
                                    <a href="/admin/delete_listado/{{ $blog->id }}" class="btn btn-danger float-right">Borrar</a>
                                </div>
                            </div>
                        @endif


                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">

                            <div class="form-group ">
                                <br><br>
                                <label for="exampleInputEmail1">Contenido</label>
                                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="50"> {!! $blog->contenido !!} </textarea>
                                @if($errors)
                                    <span class="text-danger"> {{$errors->first('contenido')}}</span>
                                @endif
                            </div>


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@stop

@section('adminlte_js')
    <script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#contenido').summernote(
                {
                    height: 200,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Campton-Medium', 'Campton-Light' , 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic'],
                    fontNamesIgnoreCheck: ["Campton-Medium", "Campton-Light", 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic']
                }
            );
        });

    </script>
@stop