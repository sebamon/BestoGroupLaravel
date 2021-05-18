@extends('main')
@section('Contenido')
<div class="container">
    <h1>Detalle Busqueda</h1>
        <div class="row form-control">
            <div class="col col-4">
                <label for="">Id</label>
                <label for="">Empresa</label>
                <label for="">Titulo</label>
                <label for="">Descripcion</label>
            </div>
            <div class="col col-8">
                <input type="text" name='idBusqueda' value='{{$busqueda->idBusqueda}}'>
                <input type="text" name='empresa' value="{{$busqueda->empresa}}">
                <input type="text" name='titulo' value="{{$busqueda->titulo}}">
                <input type="text" name='descripcion' value='{{$busqueda->descripcion}}'>
            </div>
        </div>
</div>
@endsection