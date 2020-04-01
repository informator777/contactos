@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Información</div>

                    <div class="card-body">
                        <div class="col-md-4 " style="padding-bottom:5px">
                            <a href="http://www.boliviasegura.gob.bo/" target="_blank"><img class="img-responsive" src={{ asset('/img/bolivia_segura.jpg')}} alt=""></a>
                        </div>
                        <div class="col-md-4 " style="padding-bottom:5px">
                        <a href="tel:+800101104" target="_blank"><img class="img-responsive" src={{ asset('/img/linea_gratuita.jpg')}} alt=""></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
