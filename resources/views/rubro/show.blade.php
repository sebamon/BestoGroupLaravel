@extends('main')
@section('Contenido')
<div class="container">
    <h1>Detalle Rubro</h1>
        <div class="row">
            <div class="col col-6">
               <p>Id: {{$rubro->idRubro}}</p>
               <p>Descripcion: {{$rubro->descripcion}}</p>
            </div>
        <a href="{{route('rubro.index')}}"><button class='btn btn-primary'>Atras</button></a>
        </div>
</div>
@endsection