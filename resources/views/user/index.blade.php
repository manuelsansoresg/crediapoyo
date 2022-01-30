@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <section class="content-header">
        <h1>
            Usuarios
            <small>Lista</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Usuarios</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuarios</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div>
                        <a href="/admin/user/create" class="btn btn-app pull-right">
                            <i class="fa fa-plus"></i> Nuevo
                        </a>
                    </div>
                    <div class="col-md-12">
                        @include('flash::message')
                    </div>
                    <table id="blogs" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                         
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td> {{ $user->name }}</td>
                                <td> {{ $user->email }}</td>
                                <td class="col-md-4">

                                    {{ Form::open(['route' => ['user.destroy', $user->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                    <button onclick="return confirm('¿Deseas eliminar el user?')" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <div class="col-md-12 text-center">

                    </div>
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

            $('#blogs').DataTable({
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