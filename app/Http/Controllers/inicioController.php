<?php

namespace App\Http\Controllers\inicio;
use App\Http\Controllers\Controller;
use App\Models\instituicao;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function index(instituicao $instituicao)
    {
       return view('/tributos', 'landing')->with('instituicao',$instituicao);
    }
}
