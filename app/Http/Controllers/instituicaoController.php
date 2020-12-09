<?php

namespace App\Http\Controllers;

use App\Models\instituicao;
use Illuminate\Http\Request;

class instituicaoController extends controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=1)
    {
        $instituicao = instituicao::where('id',$id)->first();
        
        if ($instituicao){
            $_SESSION['inst_id']       = $instituicao->id;
            $_SESSION['inst_nome']     = $instituicao->instituicao;
            $_SESSION['inst_CNPJ']     = $instituicao->cnpj;
            $_SESSION['inst_liberada'] = $instituicao->liberada;

           return view('inicio/index_abertura')->with('instituicao', $instituicao);
           
        }   
    }

    public function paginalogon(instituicao $instituicao){
            return view('login/index_login')->with('instituicao', $instituicao);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
