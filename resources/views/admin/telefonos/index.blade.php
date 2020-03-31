@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Telefonos</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/telefonos/create') }}" class="btn btn-success btn-sm" title="Add New Telefono">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Nuevo   
                        </a>

                        <form method="GET" action="{{ url('/admin/telefonos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Búsqueda..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nº.</th><th>Documento</th><th>Extensión</th><th>Teléfono Móvil</th><th>Teléfono Fijo</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($telefonos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ci }}</td><td>{{ $item->extension }}</td><td>{{ $item->telefono_movil }}</td><td>{{ $item->telefono_fijo }}</td>
                                        <td>
                                            <a href="{{ url('/admin/telefonos/' . $item->id) }}" title="View Telefono"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/telefonos/' . $item->id . '/edit') }}" title="Edit Telefono"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/telefonos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Telefono" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $telefonos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
