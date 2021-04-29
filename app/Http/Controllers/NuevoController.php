<?php

namespace App\Http\Controllers;

use App\Models\Nuevo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NuevoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function show($gestion_id)
    {
        return Nuevo::with('user')->where('gestion_id',$gestion_id)->where('user_id',Auth::user()->id)->get()->count();
//        return User::with('ficha')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function edit(Nuevo $nuevo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nuevo $nuevo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nuevo $nuevo)
    {
        //
    }
}
