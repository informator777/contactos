@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Telefono Id: {{ $telefono->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/telefonos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atrás</button></a>
                        <a href="{{ url('/admin/telefonos/' . $telefono->id . '/edit') }}" title="Edit Telefono"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/telefonos' . '/' . $telefono->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Telefono" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $telefono->id }}</td>
                                    </tr>
                                    <tr><th> Documento </th><td> {{ $telefono->ci }} </td></tr><tr><th> Extensión </th><td> {{ $telefono->extension }} </td></tr><tr><th> Teléfono Movil </th><td> {{ $telefono->telefono_movil }} </td></tr><tr><th> Teléfono Fijo </th><td> {{ $telefono->telefono_fijo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
