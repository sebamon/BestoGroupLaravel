@extends('main')
@section('Contenido')
<div class="container">
    <h1>Detalle Inscripcion</h1>
        <div class="row">
            <div class="col col-6">
               <p>Nro Inscripcion: {{$inscripcion->idInscripcion}}</p>
               <p>Busqueda: {{$inscripcion->idBusqueda}}</p>
               <p>Fecha: {{$inscripcion->fecha}}</p>
               <p>Fecha: {{$inscripcion->apellido}}</p>
               <p>Fecha: {{$inscripcion->nombre}}</p>
            </div>
        <a href="{{route('inscripcion.index')}}"><button class='btn btn-primary'>Atras</button></a>
        </div>
</div>
@endsection