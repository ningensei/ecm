@extends('admin/adminLayout')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        {{ ucFirst($current) }}
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('/panel/home') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i> {{ ucFirst($current) }}
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                
                <div class="col-lg-12">
                    <h2>Publicaciones recientes</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Puesto</th>
                                    <th>Fecha Publicacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($empleados as $empleado)
                                    <tr id="empleado-{{ $empleado->id }}">
                                        <td>{{ $empleado->nombre }}</td>
                                        <td>{{ $empleado->edad }}</td>
                                        <td>{{ $empleado->puesto->nombre }}</td>
                                        <td>{{ $empleado->created_at }}</td>
                                        <td>
                                            <a target="_blank" href="{{ URL::to('/empleados/ver/'.$empleado->id) }}"><i class="fa fa-eye"></i> Ver</a> | 
                                            <a class="eliminarEmpleado eliminar-{{$empleado->id}}" data-id="{{ $empleado->id }}" href="{{ URL::to('/panel/empleados/eliminar/'.$empleado->id) }}"><i class="fa fa-trash-o"></i> Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach

                                @if(!count($empleados))
                                    <tr>
                                        <td colspan="5">Actualmente no hay registros</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center">
                    {{ $empleados->links() }}
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

@stop

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('/admin/js/empleados.js') }}"></script>
@stop