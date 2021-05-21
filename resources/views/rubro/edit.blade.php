@extends('main')

@section('Contenido')

<div class="container">
    <h1>Editar Rubro</h1>
    @if (session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    <form method="POST" action="{{ route('rubro.update',$rubro->idRubro)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col col-6">
                <label for="">Descripcion</label>
            </div>    
            <div class="col col-6">
                <input type="text" name='descripcion' placeholder='Rubro' class='form-control mb-2' value='{{$rubro->descripcion}}'>
            </div>    
        
        </div>
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
    <a href="{{route('rubro.index')}}" class='btn btn-secondary'>Volver</a>
</div>

@endsection
