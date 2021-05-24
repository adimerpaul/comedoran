<?php

namespace App\Http\Controllers;

use App\Models\Antiguo;
use App\Models\Nuevo;
use App\Models\Repostulante;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function revisarn(){
        $datos=Nuevo::with('ficha')->get();
        return view('revisarn',['datos'=>$datos]);
    }
    public function revisara(){
        $datos=Antiguo::with('ficha')->get();
        return view('revisara',['datos'=>$datos]);
    }
    public function revisarr(){
//        return "a";
        $datos=Repostulante::with('ficha')->get();
        return view('revisarr',['datos'=>$datos]);
    }
}
