@extends('main')

@section('Contenido')
<div class="container">
<h1>Rubros: </h1>

<a href="{{route('rubro.create')}}" class='btn btn-primary'>+</a>
<table class="table table-hover border border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rubro</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($rubros as $rubro)
    <tr>
    <p></p>
      <th scope="row">{{$rubro->idRubro}}</th>
      <td>{{$rubro->descripcion}}</td>
      <td><a href="{{route('rubro.show',$rubro)}}"><p>Ver</p></a>
      <a href="{{route('rubro.edit',$rubro->idRubro)}}"><p>Editar</p></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection