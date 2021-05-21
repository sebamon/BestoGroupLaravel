@extends('main')

@section('Contenido')

<div class="container">
    <h1>Nueva Inscripcion:</h1>
    @if (session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    
        <form method="POST" action="{{route('inscripcion.store')}}"  >
        @csrf
        
        <div class="row">
                <div class="col col-6">
                    <label for="">Rubro</label>
                </div>
                <div class="col col-6">
                    <select name="busqueda" id="">
                    @foreach($busqueda as $item)
                    <option value="{{($item->idBusqueda)}}">{{$item->titulo}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="">Nombre</label>
                </div>
                <div class="col col-6">
                    <input type="text" name='nombre'>
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="">Apellido</label>
                </div>
                <div class="col col-6">
                    <input type="text" name='apellido'>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
        </form>
        <a href="{{route('inscripcion.index')}}" class='btn btn-secondary'>Volver</a>
</div>

@endsection