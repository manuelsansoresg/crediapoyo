@extends('adminlte::page')

@section('title', 'Leyenda CAT')

@section('content_header')
<section class="content-header">
    <h1>
        Leyenda CAT
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Cat</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Leyenda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                    <a href="/admin/cat/create" class="btn btn-app pull-right">
                        <i class="fa fa-plus"></i> Nuevo
                    </a>
                </div>

                <div class="col-md-12">
                    @include('flash::message')
                </div>
                <table id="cat" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Contenido</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($legend != null)
                        <tr>
                            <td>{!!$legend->content !!}</td>
                            <td class="col-md-2">
                                {{ Form::open(['route' => ['cat.destroy', $legend->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                <a href="{{route('cat.edit', $legend->id)}}" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                <button onclick="return confirm('¿Deseas eliminar el elemento?')" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop