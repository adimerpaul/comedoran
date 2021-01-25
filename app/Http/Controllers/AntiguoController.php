<?php

namespace App\Http\Controllers;

use App\Models\Antiguo;
use App\Models\Gestion;
use App\Models\Nuevo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntiguoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//        return "a";
//        exit;
        $g=Gestion::where('inicio','<=',date('Y-m-d'))->where('fin','>=',date('Y-m-d'))->where('tipo','ANTIGUOS')->first();
        if ($request->hasFile('valor'))$valor = $request->file('valor')->store('files'); else $valor="";
        if ($request->hasFile('renovacion'))$renovacion = $request->file('renovacion')->store('files'); else $renovacion="";
        if ($request->hasFile('pago'))$pago = $request->file('pago')->store('files'); else $pago="";
        if ($request->hasFile('actualizacion'))$actualizacion = $request->file('actualizacion')->store('files'); else $actualizacion="";
        if ($request->hasFile('certificacion'))$certificacion = $request->file('certificacion')->store('files'); else $certificacion="";

        $d=new Antiguo();
        $d->valor=$valor;
        $d->renovacion=$renovacion;
        $d->pago=$pago;
        $d->actualizacion=$actualizacion;
        $d->certificacion=$certificacion;
        $d->user_id=Auth::user()->id;
        $d->gestion_id=$g->id;
        $d->save();
        return $d;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function show($gestion_id)
    {
        return Antiguo::where('gestion_id',$gestion_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function edit(Antiguo $antiguo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antiguo $antiguo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antiguo $antiguo)
    {
        //
    }
}
