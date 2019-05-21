@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <section class="content-header">
        <h1>
            Blog
            <small>Lista</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Blog</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Blogs</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div>
                        <a href="/admin/blog/create" class="btn btn-app pull-right">
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
                            <th>Titulo</th>
                            <th>Portada</th>
                            <th>Destacado</th>
                            <th>Contenido</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($blogs as $blog)
                            <tbody>
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td> {{ $blog->title }}</td>
                                <td class=""> <img class="img-thumbnail col-md-8" src="{{ asset('img/blog/').'/'.$blog->portada_thumb }}" alt="">  </td>
                                <td>
                                    @if($blog->highlight == 1)
                                        <i class="fa  fa-star" aria-hidden="true"></i>
                                    @else
                                        <i class="fa  fa-star-o" aria-hidden="true"></i>
                                    @endif
                                </td>
                                <td class="" >
                                    {!! Str::limit($blog->contenido, 130) !!}
                                </td>
                                <td class="col-md-4">

                                    {{ Form::open(['route' => ['blog.destroy', $blog->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                    <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                    @if($blog->highlight == 0)
                                        <a href="/admin/blog/highlight/{{ $blog->id }}" class="btn btn-success"><i class="fa  fa-star" aria-hidden="true"></i> </a>
                                    @else
                                        <a href="/admin/blog/unhighlight/{{ $blog->id }}" class="btn btn-warning"><i class="fa  fa-star" aria-hidden="true"></i> </a>
                                    @endif
                                    <button onclick="return confirm('¿Deseas eliminar el blog?')" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
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