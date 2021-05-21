@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-list mx-2"></i>Busquedas:</h2>
    <a href="{{route('busqueda.create')}}" class='btn btn-info mx-2'><i class="fas fa-plus me-2"></i>Cargar nuevo</a>
    <hr class=my-4>

    <table class="table table-striped table-hover table-responsive text-center border border-info"> <!-- Inicio tabla búsquedas -->
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
        <td class="d-grid gap-2">
            <a href="{{route('busqueda.show',$item)}}" class="btn btn-info btn-sm"><i class="fas fa-eye me-2"></i>Ver</a>
            <a href="{{route('busqueda.edit',$item)}}" class="btn btn-info btn-sm"><i class="fas fa-pen me-2"></i>Editar</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table> <!-- Fin tabla búsquedas -->
</div>
@endsection
