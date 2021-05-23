@extends('estructura/layout')
@section('cuerpo')

<div class="container table-responsive">
    <h2 class="text-center mb-4"><i class="fas fa-list mx-2"></i>Busquedas:</h2>
    <a href="{{route('busqueda.create')}}" class='btn btn-info mx-2'><i class="fas fa-plus me-2"></i>Cargar nuevo</a>
    <hr class=my-4>

    <table class="table table-striped table-hover text-center border border-info"> <!-- Inicio tabla búsquedas -->
    <thead>
        <tr>
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
        <td>{{$item->rubro->descripcion}}</td>
        <td>{{$item->empresa}}</td>
        <td>{{$item->titulo}}</td>
        <td>{{$item->descripcion}}</td>
        <td class="btn-group">
            <a href="{{route('busqueda.show',$item)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
            <a href="{{route('busqueda.edit',$item->idBusqueda)}}" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
            <a href="{{route('busqueda.destroy',$item->idBusqueda)}}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table> <!-- Fin tabla búsquedas -->
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmarBorrar">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="confirmarBorrar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">¿Está seguro de querer eliminar el registro #{{$item->idBusqueda}}?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal"><i class="fas fa-chevron-left me-2"></i>Volver atrás</button>
            <a href="{{route('busqueda.destroy',$item->idBusqueda)}}" class="btn btn-danger"><i class="fas fa-trash me-2"></i>Estoy seguro</a>
        </div>
      </div>
    </div>
  </div>
@endsection
