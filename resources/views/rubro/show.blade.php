@extends('../estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-eye mx-2"></i>Detalle rubro:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    <div class="row"> <!-- Inicio detalle rubro -->
        <div class="col col-6">
            <p>Id: {{$rubro->idRubro}}</p>
            <p>Descripcion: {{$rubro->descripcion}}</p>
        </div>
    </div> <!-- Fin detalle rubro -->
</div>
@endsection
