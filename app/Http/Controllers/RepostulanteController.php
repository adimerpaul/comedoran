<?php

namespace App\Http\Controllers;

use App\Models\Antiguo;
use App\Models\Ficha;
use App\Models\Gestion;
use App\Models\Nuevo;
use App\Models\Repostulante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepostulanteController extends Controller
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
        $g=Gestion::where('inicio','<=',date('Y-m-d'))->where('fin','>=',date('Y-m-d'))->where('tipo','ANTIGUOS')->first();
        if ($request->hasFile('valor'))$valor = $request->file('valor')->store('files'); else $valor="";
        if ($request->hasFile('ficha'))$ficha = $request->file('ficha')->store('files'); else $ficha="";
        if ($request->hasFile('matricula'))$matricula = $request->file('matricula')->store('files'); else $matricula="";
        if ($request->hasFile('pago'))$pago = $request->file('pago')->store('files'); else $pago="";
        if ($request->hasFile('certificado'))$certificado = $request->file('certificado')->store('files'); else $certificado="";
        $fi=Ficha::where('user_id',Auth::user()->id)->first();
//        return $ficha->id;
        $d=new Repostulante();
        $d->valor=$valor;
        $d->aficha=$ficha;
        $d->matricula=$matricula;
        $d->pago=$pago;
        $d->certificado=$certificado;
        $d->user_id=Auth::user()->id;
        $d->gestion_id=$g->id;
        $d->ficha_id=$fi->id;
        $d->save();
        return $d;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repostulante  $repostulante
     * @return \Illuminate\Http\Response
     */
    public function show($gestion_id)
    {
        return Repostulante::where('gestion_id',$gestion_id)->where('user_id',Auth::user()->id)->get()->count();

//        return Repostulante::where('gestion_id',$gestion_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repostulante  $repostulante
     * @return \Illuminate\Http\Response
     */
    public function edit(Repostulante $repostulante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repostulante  $repostulante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repostulante $repostulante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repostulante  $repostulante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repostulante $repostulante)
    {
        //
    }
}
