<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

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
        if ($request->hasFile('valor')) {
            $path = $request->file('valor')->store('files');
            return $path;
        }

//        $data = $request->all();
//        foreach ($data as $key => $value) {
//            echo $value;
//        }

//        return strlen($request->hermanos);
//        foreach ( json_encode($request->hermanos)  as $row){
//            echo $row->becario;
//        }
//        echo (json_encode($request->all()));
//        exit;
//        foreach ($request->hermanos as $row){
//            echo $row;
//        }

        $array = array(1, 2, 3, array(4,2,4));
//        foreach ($array as &$valor) {
//            $valor = $valor * 2;
//        }
//        return  json_encode($request->all());
//        return  $request->hermanos[0]->nombres;
//        return ($request->hermanos->object);
        return $request->hermanos;

        if (count($request->json()->all())) {
            return   $request->json()->all();
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
