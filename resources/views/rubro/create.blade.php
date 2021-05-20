@extends('main')

@section('Contenido')

<div class="container">
    <h1>Crear Nuevo Rubro</h1>

    <form method="POST" action="{{ route('rubro.store') }}">
        @csrf
        <div class="row">
            <div class="col col-6">
                <label for="">Descripcion</label>
            </div>    
            <div class="col col-6">
                <input type="text" name='descripcion' placeholder='Rubro' class='form-control mb-2'>
            </div>    
        </div>
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
</div>

@endsection
