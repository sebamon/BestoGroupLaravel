@extends('../estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-plus mx-2"></i>Nuevo rubro:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    @if (session('mensaje') )
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center m-3 p-3">
        <i class='fas fa-check-circle mx-2'></i>{{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form method="POST" action="{{ route('rubro.store') }}"> <!-- Inicio formulario rubro -->
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
    </form> <!-- Fin formulario rubro -->
</div>

@endsection
