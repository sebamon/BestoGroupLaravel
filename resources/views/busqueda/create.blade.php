@extends('../estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-plus mx-2"></i>Nueva búsqueda:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    @if (session('mensaje') )
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center m-3 p-3">
        <i class='fas fa-check-circle mx-2'></i>{{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{route('busqueda.store')}}" method='POST'> <!-- Inicio formulario búsqueda -->
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
</div> <!-- Fin formulario búsqueda -->

@endsection
