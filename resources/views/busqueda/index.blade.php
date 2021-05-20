@extends('../main')

@section('Contenido')
<div class="container">
<h1>Busquedas: </h1>
<table class="table table-hover border border-primary">
  <thead>
    <tr>
   <p> {{$busqueda[1]->idRubro}}</p>
      <th scope="col">#</th>
      <th scope="col">Rubro</th>
      <th scope="col">Empresa</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($busqueda as $item)
    <tr>
    <p></p>
      <th scope="row">{{$item->idBusqueda}}</th>
      <!-- <td>{{$item->descripcion}}</td> -->
      <td></td>
      <td>{{$item->empresa}}</td>
      <td>{{$item->titulo}}</td>
      <td>{{$item->descripcion}}</td>
      <td>
        <a href="{{route('busqueda.show',$item)}}"><p>Ver</p></a>
        <a href="{{route('busqueda.edit',$item)}}"><p>Editar</p></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection