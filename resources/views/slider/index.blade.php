@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <section class="content-header">
        <h1>
            Slider
            <small>Contenido</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Slider</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Slider</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div>
                        <a href="/admin/slider/create" class="btn btn-app pull-right">
                            <i class="fa fa-plus"></i> Nuevo
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @include('flash::message')
                        </div>
                    </div>
                    <table id="slider" class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#Orden</th>
                            <th>Icono</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($sliders as $slider)
                            <tbody>
                                <tr>
                                    <td>{{ $slider->order }}</td>
                                    <td style="width: 200px">
                                        <img class="img-thumbnail col-md-6 " src="{{ asset('/img').'/icon_slider/'.$slider->icon }}" alt="">
                                    </td>
                                    <td> {{ $slider->title }} </td>
                                    <td> {{ $slider->content }}</td>

                                    <td style="width: 120px">

                                        {{ Form::open(['route' => ['slider.destroy', $slider->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                        <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                        <button onclick="return confirm('¿Deseas eliminar el contenido?')" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                </div>

            </div>

        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app_admin.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/datatable/js/responsive.js') }}"></script>
    <script>
        $(function () {

            $('#slider').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                "scrollX": true
            })
        })
    </script>
@stop