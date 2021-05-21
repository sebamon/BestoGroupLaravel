@extends('main')
@section('Contenido')
<div class="container">
    <h1>Nueva Busqueda:</h1>
    @if (session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    <form action="{{route('busqueda.store')}}" method='POST'>
    @csrf
        <div class="row">
            <div class="col col-6">
                <label for="">Rubro</label>
            </div>
            <div class="col col-6">
                <select class="form-select" name='rubro' aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($rubros as $rubro)
                        <option value="{{$rubro->idRubro}}">{{$rubro->descripcion}}</option>
                    @endforeach
                </select> 
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="">Empresa</label>
                </div>
                <div class="col col-6">
                    <input type="text" name='empresa' class='form-control'>
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="">Titulo</label>
                </div>
                <div class="col col-6">
                    <input type="text" name='titulo' class='form-control'>
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="">Descripcion</label>
                </div>
                <div class="col col-6">
                    <input type="text" name='descripcion' class='form-control'>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
    <a href="{{route('busqueda.index')}}" class='btn btn-secondary'>Volver</a>
</div>
@endsection
