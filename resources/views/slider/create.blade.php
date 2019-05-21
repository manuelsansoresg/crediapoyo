@extends('adminlte::page')

@section('title', 'Blog')


@section('content_header')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.css') }}">

    <section class="content-header">
        <h1>
            Slider
            <small>Nuevo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/slider">Slider</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo slider</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('flash::message')
                    {{ Form::open(['route' => 'slider.store', 'method' => 'POST', 'files' => true]) }}

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">titulo</label>
                            <input type="text" class="form-control" name="titulo">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('contenido')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Orden</label>
                            <input type="text" class="form-control" name="orden">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('orden')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Icono</label>
                            <input type="file" name="icono" class="form-control">
                            @if($errors)
                                <span class="text-danger"> {{$errors->first('icono')}}</span>
                            @endif
                        </div>




                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contenido</label>
                            <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
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
