@extends('main')

@section('Contenido')
<h1>Busquedas: </h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Empresa</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($busqueda as $item)
    <tr>
      <th scope="row">{{$item->idBusqueda}}</th>
      <td>{{$item->empresa}}</td>
      <td>{{$item->titulo}}</td>
      <td>{{$item->descripcion}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

