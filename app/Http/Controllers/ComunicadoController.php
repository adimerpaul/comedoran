<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comunicado::all();
    }
    public function mostrar()
    {
        return Comunicado::where('estado','=','VISIBLE')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d=new Comunicado();
        $d->nombre=$request->nombre;
        $d->contenido=$request->contenido;
        $d->color=$request->color;
        $d->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d=Comunicado::find($id);
        if ($d->estado=='OCULTO'){
            $d->estado='VISIBLE';
        }else{
            $d->estado='OCULTO';
        }
        $d->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunicado $comunicado)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d=Comunicado::find($id);
        $d->nombre=$request->nombre;
        $d->contenido=$request->contenido;
        $d->color=$request->color;
        $d->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d=Comunicado::find($id);
        $d->delete();
    }
}
