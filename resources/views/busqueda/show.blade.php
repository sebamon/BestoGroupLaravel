@extends('../main')
@section('Contenido')
<div class="container">
    <h1>Detalle Busqueda</h1>
        <div class="row">
            <div class="col col-6">
               <p>Id: {{$busqueda->idBusqueda}}</p>
               <p>Empresa: {{$busqueda->empresa}}</p>
               <p>Titulo: {{$busqueda->titulo}}</p>
               <p>Descripcion: {{$busqueda->descripcion}}</p>
            </div>
        <a href="{{route('busqueda.index')}}"><button class='btn btn-primary'>Atras</button></a>
        </div>
</div>
@endsection