@extends('adminlte::page')

@section('title', 'Leyenda CAT')


@section('content_header')
<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.css') }}">

<section class="content-header">
    <h1>
        Leyenda CAT
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/cat">Leyenda CAT</a></li>
        <li class="active">Editar</li>
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
                {{ Form::open(['route' => ['cat.update', $legend_cat->id], 'method' => 'PUT']) }}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contenido</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="50">{!! $legend_cat->content !!}</textarea>
                        @if($errors)
                        <span class="text-danger"> {{$errors->first('content')}}</span>
                        @endif
                    </div>
                    <div class="">
                        <div class="form-group">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
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
        $('#content').summernote({
            height: 200,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Campton-Medium', 'Campton-Light', 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic'],
            fontNamesIgnoreCheck: ["Campton-Medium", "Campton-Light", 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic']
        });
    });
</script>
@stop