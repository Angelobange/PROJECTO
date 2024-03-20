<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
    $clientes = Cliente::all(); 
        return view('clientes.index', ['clientes' => $clientes]); 
        return view('welcome');

    }

    public function create(){
        return view('clientes.create');
    }

    public function createe()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
        ]);


        Cliente::create([
            'nome' => $request->input('nome'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
        ]);


        return redirect()->route('clientes.index')->with('success', 'Cliente adicionado com sucesso!');
    }
}
