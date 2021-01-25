<?php

namespace App\Http\Controllers;

use App\Models\Economica;
use App\Models\Familia;
use App\Models\Ficha;
use App\Models\Gestion;
use App\Models\Hermano;
use App\Models\Nuevo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FichaController extends Controller
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
//        $g=Gestion::whereBetween( date('Y-m-d'),['inicio','fin'])->get();
    $g=Gestion::where('inicio','<=',date('Y-m-d'))->where('fin','>=',date('Y-m-d'))->where('tipo','NUEVOS')->first();
//        echo $g->id;
//        exit;
        $familiar='';
        if ($request->hasFile('valor'))$valor = $request->file('valor')->store('files'); else $valor="";
//        echo $valor;
//        exit;
        if ($request->hasFile('matricula'))$matricula = $request->file('matricula')->store('files'); else $matricula="";
        if ($request->hasFile('vivienda'))$vivienda = $request->file('vivienda')->store('files'); else $vivienda="";
        if ($request->hasFile('ci'))$ci = $request->file('ci')->store('files'); else $ci="";
        if ($request->hasFile('libreta'))$libreta = $request->file('libreta')->store('files'); else $libreta="";
        if ($request->hasFile('pago'))$pago = $request->file('pago')->store('files'); else $pago="";
        if ($request->hasFile('actividad'))$actividad = $request->file('actividad')->store('files'); else $actividad="";
        if ($request->hasFile('ciapoderados'))$ciapoderados = $request->file('ciapoderados')->store('files'); else $ciapoderados="";
        if ($request->hasFile('familiar'))$familiar = $request->file('familiar')->store('files'); else $familiar="";
        if ($request->hasFile('defuncion'))$defuncion = $request->file('defuncion')->store('files'); else $defuncion="";
        if ($request->hasFile('divocio'))$divocio = $request->file('divocio')->store('files'); else $divocio="";
        if ($request->hasFile('denuncia'))$denuncia = $request->file('denuncia')->store('files'); else $denuncia="";
        if ($request->hasFile('viviendafamiliar'))$viviendafamiliar = $request->file('viviendafamiliar')->store('files'); else $viviendafamiliar="";
        $d=new Nuevo();
        $d->valor=$valor;
        $d->matricula=$matricula;
        $d->vivienda=$vivienda;
        $d->ci=$ci;
        $d->libreta=$libreta;
        $d->pago=$pago;
        $d->actividad=$actividad;
        $d->ciapoderados=$ciapoderados;
        $d->familiar=$familiar;
        $d->defuncion=$defuncion;
        $d->divocio=$divocio;
        $d->denuncia=$denuncia;
        $d->gestion_id=$g->id;


        $d->viviendafamiliar=$viviendafamiliar;
        $d->user_id=Auth::user()->id;

        $d->save();

//        return $valor;
//        exit;
         $f=new Ficha();
        $f->nombres=$request->nombres;
        $f->paterno=$request->paterno;
        $f->materno=$request->materno;
        $f->telefono=$request->telefono;
        $f->celular=$request->celular;
        $f->ingreso=$request->ingreso;
        $f->facultad=$request->facultad;
        $f->carrera=$request->carrera;
        $f->semestre=$request->semestre;
        $f->discapacidad=$request->discapacidad;
        $f->hermanos=$request->hermanos;
        $f->otros=$request->otros;
        $f->observacion=$request->observacion;
        $f->user_id=Auth::user()->id;
        $f->save();
        return $f;
//        echo $request->hermanos;


//        foreach ($request->hermanos as $row){
//            $h=new Hermano();
//            $h->nombre=$row['nombre'];
//            $h->becario=$row['becario'];
//            $h->postulante=$row['postulante'];
//            $h->facultad=$row['facultad'];
//            $h->carrera=$row['carrera'];
//            $h->ficha_id=$f->id;
//            $h->save();
//        }
//        foreach ($request->familias as $row){
//            $h=new Familia();
//            $h->nombre=$row['nombre'];
//            $h->parentesco=$row['parentesco'];
//            $h->fechanac=$row['fechanac'];
//            $h->lugar=$row['lugar'];
//            $h->sexo=$row['sexo'];
//            $h->estadocivil=$row['estadocivil'];
//            $h->grado=$row['grado'];
//            $h->recidencia=$row['recidencia'];
//            $h->vivienda=$row['vivienda'];
//            $h->basico=$row['basico'];
//            $h->ficha_id=$f->id;
//            $h->save();
//        }
//        foreach ($request->economicas as $row){
//            $h=new Economica();
//            $h->nombre=$row['nombre'];
//            $h->parentesco=$row['parentesco'];
//            $h->ocupacion=$row['ocupacion'];
//            $h->actividad=$row['actividad'];
//            $h->ingreso=$row['ingreso'];
//            $h->lugar=$row['lugar'];
//            $h->ficha_id=$f->id;
//            $h->save();
//        }


    }
    function guardar(Request $request){
//    exit;
//        return $request->hermanos;
//        exit;
        foreach ($request->hermanos as $row){
            $h=new Hermano();
            $h->nombre=$row['nombre'];
            $h->becario=$row['becario'];
            $h->postulante=$row['postulante'];
            $h->facultad=$row['facultad'];
            $h->carrera=$row['carrera'];
            $h->ficha_id=$request->ficha_id;
            $h->save();
        }
        foreach ($request->familias as $row){
            $h=new Familia();
            $h->nombre=$row['nombre'];
            $h->parentesco=$row['parentesco'];
            $h->fechanac=$row['fechanac'];
            $h->lugar=$row['lugar'];
            $h->sexo=$row['sexo'];
            $h->estadocivil=$row['estadocivil'];
            $h->grado=$row['grado'];
            $h->recidencia=$row['recidencia'];
            $h->vivienda=$row['vivienda'];
            $h->basico=$row['basico'];
            $h->ficha_id=$request->ficha_id;
            $h->save();
        }
        foreach ($request->economicas as $row){
            $h=new Economica();
            $h->nombre=$row['nombre'];
            $h->parentesco=$row['parenteso'];
            $h->ocupacion=$row['ocupacion'];
            $h->actividad=$row['actividad'];
            $h->ingreso=$row['ingreso'];
            $h->lugar=$row['lugar'];
            $h->ficha_id=$request->ficha_id;
            $h->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        //
    }
}
