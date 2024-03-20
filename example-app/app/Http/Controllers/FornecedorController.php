<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all(); 
        return view('fornecedores.index', compact('fornecedores')); 
    }

    public function create(){
        return view('clientes.create');
    }
}
