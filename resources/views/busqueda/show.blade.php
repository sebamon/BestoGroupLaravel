@extends('../estructura/layout')
@section('cuerpo')

<div class="container"><h2 class="text-center mb-4"><i class="fas fa-eye mx-2"></i>Detalle búsqueda:</h2>
    <a href="{{route('busqueda.index')}}" class='btn btn-info mx-2'><i class="fas fa-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    <div class="row"> <!-- Inicio detalle búsqueda -->
        <div class="col col-6">
            <p>Id: {{$busqueda->idBusqueda}}</p>
            <p>Empresa: {{$busqueda->empresa}}</p>
            <p>Titulo: {{$busqueda->titulo}}</p>
            <p>Descripcion: {{$busqueda->descripcion}}</p>
        </div>
    </div> <!-- Fin detalle búsqueda -->
</div>
@endsection
