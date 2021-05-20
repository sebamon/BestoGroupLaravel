@extends('main')
@section('Contenido')
<div class="container">
    <h1>Nueva Busqueda:</h1>
    <form action="">
        <div class="row">
            <div class="col col6 d-block">
                <label for="">Rubro</label>
                <label for="">Empresa</label>
            </div>
            <div class="col col6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($rubros as $rubro)
                        <option value="{{$rubro->idRubro}}">{{$rubro->descripcion}}</option>
                    @endforeach
                </select> 
            </div>
        </div>
    
    </form>
</div>
@endsection
