<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    public function store(Request $request){
        return Testamento::create($request->all());
    }
}
