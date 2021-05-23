@extends('estructura/layout')
@section('cuerpo')

<div class="card bg-light border rouded-3 p-2 m-auto"> <!-- Comienzo div introducción -->
    <h1 class="display"><i class="fas fa-briefcase mx-2"></i>Empleos TICS</h1>
    <hr class="my-2">
    <h5>La agencia Empleos TICs desea poder realizar las inscripciones a las búsquedas laborales online.</h5>
    <p class="lead"><ul>
        Con este objetivo debemos:
            <li>Listar rubros con un link que nos permitan ver las búsquedas de cada rubro.</li>
            <li>Mostrar búsquedas laborales por rubro</li>
            <li>Permitir la inscripción de un postulante a una búsqueda laboral.</li>
            <li>Mostrar las inscripciones de una búsqueda laboral.</li>
    </ul></p>
</div> <!-- Fin div introducción -->
<div class="row m-3">
    <div class="col-4 d-grid gap-3">
        <a href="{{route('rubro.create')}}" class="btn btn-lg btn-outline-dark"><i class="fas fa-plus me-3"></i>Nuevo rubro</a>
        <a href="{{route('rubro.index')}}" class="btn btn-lg btn-outline-dark"><i class='fas fa-list me-3'></i>Listar rubros</a>
    </div>
    <div class="col-4 d-grid gap-3">
        <a href="{{route('busqueda.create')}}" class="btn btn-lg btn-outline-dark"><i class="fas fa-plus me-3"></i>Nueva búsqueda</a>
        <a href="{{route('busqueda.index')}}" class="btn btn-lg btn-outline-dark"><i class='fas fa-list me-3'></i>Listar búsquedas</a>
    </div>
    <div class="col-4 d-grid gap-3">
        <a href="{{route('inscripcion.create')}}" class="btn btn-lg btn-outline-dark"><i class="fas fa-upload me-3"></i>Nueva inscripción</a>
        <a href="{{route('inscripcion.index')}}" class="btn btn-lg btn-outline-dark"><i class='fas fa-list me-3'></i>Listar inscripciones</a>
    </div>
</div>
@endsection
