<?php

namespace App\Http\Controllers;

use App\Models\artigo;
use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AchadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $achados=DB::table('artigos')->where('tipo','=','achado')->get();

        return view('achados')->with('achados',$achados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=categoria::pluck('designacao','id');
        $artigo=new artigo();
        return View('Achado.create',['categorias' => $categorias ],['artigo' => $artigo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required|max:255|min:3',
            'designacao' => 'required|min:3',
            'data' => 'required',
            'local' => 'required',
        ]);
        $artigo= new artigo(array (
            "titulo" => $request->get("titulo"),
            "designacao"=> $request->get("designacao"),
            "descricao"=> $request->get("descricao"),
            "data"=> $request->get("data"),
            "categoria_id"=>$request->get("categoria_id"),
            "local"=> $request->get("local"),
            "descricao_local"=> $request->get("descricao_local"),
            "tipo"=>$request->get("tipo"),
            "foto"=>$request->file("foto")->getClientOriginalName()
        ));

        $request->file("foto")->move( base_path() . '/public/img' , $request->file("foto")->getClientOriginalName());

        $artigo->save();
        return back()
            ->with('success','Achado Reportado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artigo=artigo::find($id);

   return view('Achado.show',compact('artigo'));
    }

    public function preencher($id)
    {
        $artigo=artigo::find($id);
       return view('Achado.create',compact('artigo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artigo=artigo::find($id);
        $categorias=categoria::pluck('designacao','id');
        return View('Achado.create',['categorias' => $categorias ],['artigo' => $artigo]);

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
}
