@extends('main')

@section('Contenido')
<div class="container">
<h1>Inscripciones: </h1>

<a href="{{route('inscripcion.create')}}" class='btn btn-primary'>+</a>
<table class="table table-hover border border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Busqueda</th>
      <th scope="col">Fecha</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Accion</th>
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
      <td><a href="{{route('inscripcion.show',$item)}}"><p>Ver</p></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection