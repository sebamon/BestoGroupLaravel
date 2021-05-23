@extends('estructura/layout')
@section('cuerpo')

<div class="container table-responsive">
    <h2 class="text-center mb-4"><i class="fas fa-list mx-2"></i>Rubros:</h2>
    <a href="{{route('rubro.create')}}" class='btn btn-info mx-2'><i class="fas fa-plus me-2"></i>Cargar nuevo</a>
    <hr class=my-4>

    <table class="table table-striped table-hover text-center border border-info"> <!-- Inicio tabla rubros -->
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Rubro</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rubros as $rubro)
        <tr>
        <p></p>
        <th scope="row">{{$rubro->idRubro}}</th>
        <td>{{$rubro->descripcion}}</td>
        <td class="btn-toolbar d-flex justify-content-end">
            <div class="btn-group me-2">
                <a href="{{route('rubro.show',$rubro)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
            </div>
            <div class="btn-group me-2">
                <a href="{{route('rubro.edit',$rubro->idRubro)}}" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
                <a href="{{route('rubro.destroy',$rubro->idRubro)}}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i></a>
            </div>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table> <!-- Fin tabla rubros -->
</div>
@endsection
