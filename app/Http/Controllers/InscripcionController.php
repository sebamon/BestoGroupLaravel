<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Busqueda;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();
        foreach($inscripciones as $inscripcion)
        {
            $inscripciones->busqueda=Busqueda::find($inscripcion->idBusqueda);
        }
        return view ('inscripcion.index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $busqueda = Busqueda::all();
        return view('inscripcion.create', compact('busqueda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $inscripcionNueva = new Inscripcion;
        $inscripcionNueva->idBusqueda = $request->busqueda;
        $inscripcionNueva->apellido = $request->apellido;
        $inscripcionNueva->nombre= $request->nombre;
        $inscripcionNueva->fecha =date("Y-m-d");

        $inscripcionNueva->save();
        return back()->with('mensaje', 'Inscripcion Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        return view('inscripcion.show',compact('inscripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscripcion=Inscripcion::findOrFail($id);
        $busqueda = Busqueda::all();
        $busquedaSeleccionada=Busqueda::find($inscripcion->idBusqueda);
        $inscripcion->busqueda=$busquedaSeleccionada;
        return view('inscripcion.edit',compact('inscripcion','busqueda'));

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
        $inscripcion=Inscripcion::find($id);
        $inscripcion->nombre=$request->nombre;
        $inscripcion->apellido=$request->apellido;
        $inscripcion->idBusqueda=$request->busqueda;
        $inscripcion->save();

        return back()->with('mensaje', 'Inscripcion editada'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscripcionEliminar = App\Inscripcion::findOrFail($id);
        $inscripcionEliminar->delete();

    return back()->with('mensaje', 'Inscripcion Eliminada');
    }
}
