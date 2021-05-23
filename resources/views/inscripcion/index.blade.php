@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-list mx-2"></i>Inscripciones:</h2>
    <a href="{{route('inscripcion.create')}}" class='btn btn-info mx-2'><i class="fas fa-plus me-2"></i>Cargar nuevo</a>
    <hr class=my-4>

    <table class="table table-striped table-hover table-responsive text-center border border-info"> <!-- Inicio tabla inscripciones -->
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Búsqueda</th>
        <th scope="col">Fecha</th>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($inscripciones as $item)
        <tr>
        <p></p>
        <th scope="row">{{$item->idInscripcion}}</th>
        <td><a href="{{route('busqueda.show',$item->idBusqueda)}}">{{$item->idBusqueda}}</td></a>
        <td>{{$item->fecha}}</td>
        <td>{{$item->apellido}}</td>
        <td>{{$item->nombre}}</td>
        <td class="btn-group">
            <a href="{{route('inscripcion.show',$item)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
            <a href="{{route('inscripcion.edit',$item->idBusqueda)}}" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
            <a href="{{route('inscripcion.destroy',$item->idBusqueda)}}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table> <!-- Fin tabla inscripciones -->
</div>
@endsection
