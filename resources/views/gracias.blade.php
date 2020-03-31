@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Pantalla principal</div>

                    <div class="alert alert-success">
                      <h1> ¡GRACIAS POR LLENAR EL FORMULARIO!  </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
