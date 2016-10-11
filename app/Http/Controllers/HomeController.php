<?php

namespace App\Http\Controllers;

use App\Models\artigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achados=DB::table('artigos')->where('tipo','=','achado')->get();
        $perdidos=DB::table('artigos')->where('tipo','=','Perdido')->get();


        return view('home')->with(array('achados' =>$achados, 'perdidos' => $perdidos));
    }
}
