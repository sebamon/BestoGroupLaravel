@extends('../estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-eye mx-2"></i>Detalle inscripción:</h2>
    <a href="{{route('inscripcion.index')}}" class='btn btn-info mx-2'><i class="fas fa-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    <div class="row"> <!-- Inicio detalle inscripcion -->
        <div class="col col-6">
            <p>Nro Inscripcion: {{$inscripcion->idInscripcion}}</p>
            <p>Busqueda: {{$inscripcion->idBusqueda}}</p>
            <p>Fecha: {{$inscripcion->fecha}}</p>
            <p>Fecha: {{$inscripcion->apellido}}</p>
            <p>Fecha: {{$inscripcion->nombre}}</p>
        </div>
    </div> <!-- Fin detalle inscripcion -->
</div>
@endsection
