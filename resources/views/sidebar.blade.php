<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Menú
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/') }}">
                        Página de Inicio
                    </a>
                    <br>
                    @auth
                    <a href="{{ url('/admin/telefonos') }}">
                        Detalle de Teléfonos
                    </a>
                    @endauth
                   
                   
                    <br>
                    <a href="{{ url('/admin/telefonos/create') }}">
                        Registrar Teléfonos
                    </a>


                </li>
            </ul>
        </div>
    </div>
</div>
