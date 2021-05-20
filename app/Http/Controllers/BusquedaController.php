<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\BusquedaController;
//use App\Busqueda;
use App\Models\Busqueda;
use App\Models\Rubro;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $busqueda = Busqueda::paginate(3);
       $busqueda = Busqueda::all();
        foreach($busqueda as $item)
        {
            $item->rubro=Rubro::find($item->idRubro);
        }
        return view ('busqueda.index', compact('busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubros = Rubro::all();
        return view('busqueda.create',compact('rubros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevaBusqueda = new Busqueda;
        $nuevaBusqueda->idRubro=$request->rubro;
        $nuevaBusqueda->empresa=$request->empresa;
        $nuevaBusqueda->titulo=$request->titulo;
        $nuevaBusqueda->descripcion=$request->descripcion;

        $nuevaBusqueda->save();

        return back()->with('mensaje', 'Busqueda Agregada');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('busqueda.show',['busqueda'=>Busqueda::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function __invoke()
    {
        // ...
    }
}
