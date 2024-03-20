<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fatura;

class FacturaController extends Controller
{

    public function index()
    {
        $faturas = Fatura::all(); 
        return view('faturas.index', compact('faturas')); 
    }


    
}
