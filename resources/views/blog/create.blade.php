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
                    <h3 class="box-title">Album</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('flash::message')
                    {{ Form::open(['route' => 'blog.store', 'method' => 'POST', 'files' => true]) }}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('titulo')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Imágen de portada</label>
                            <input type="file" name="portada" class="form-control">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('portada')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Imágen en listado</label>
                            <input type="file" name="imagen_listado" class="form-control">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('imagen_listado')}}</span>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contenido</label>
                            <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="50"></textarea>
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('contenido')}}</span>
                            @endif
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
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Campton-Medium', 'Campton-Light'],
                    fontNamesIgnoreCheck: ["Campton-Medium", "Campton-Light"]
                }
            );
        });

    </script>
@stop
