@extends("layouts.master")

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Agregar Usuario</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre Completo</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="correo-txt" class="form-label">Correo Electronico</label>
                        <input type="email" id="correo-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nusuario-txt" class="from-label">Nombre de Usuario</label>
                        <input type="text" id="nusuario-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/usuariosService.js')}}"></script>
    <script src="{{asset('js/registro_usuarios.js')}}"></script>
@endsection