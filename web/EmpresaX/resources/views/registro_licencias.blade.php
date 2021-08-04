@extends('layouts.master')

@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <span>Agregar Licencia Medica</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre Completo</label>
                    <input type="text" id="nombre-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="rut-txt" class="form-label">RUT</label>
                    <input type="number" id="rut-txt" class="form-control">
                </div>
                <!-- TODO: Cambiar a Fecha y Validar con migracion -->
                <div class="mb-3">
                    <label for="otorgamiento-txt" class="form-label">Fecha de Otorgamiento</label>
                    <input type="number" class="form-control" id="otorgamiento-txt">
                </div>
                <!-- TODO: Cambiar a Fecha y Validar con migracion -->
                <div class="mb-3">
                    <label for="reposo-txt" class="from-label">Fecha Inicio Reposo</label>
                    <input type="number" id="reposo-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="sexo-select" class="form-label">Sexo</label>
                    <select class="form-select" id="sexo-select">
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dias-txt" class="form-label">N° de Dias</label>
                    <input type="number" id="dias-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tipolicencia-select" class="form-label">Tipo de Licencia</label>
                    <select class="form-select" id="tipolicencia-select">
                        
                    </select>
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button id="registrarlicencia-btn" class="btn btn-info">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/licenciasService.js')}}"></script>
    <script src="{{asset('js/servicios/tipolicenciaService.js')}}"></script>
    <script src="{{asset('js/servicios/sexosService.js')}}"></script>
    <script src="{{asset('js/registro_licencias.js')}}"></script>
@endsection