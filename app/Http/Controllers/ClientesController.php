<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function list(){

    	$clientes = Cliente::all();

		return view('interna.clientes', [
			'clientes' => $clientes,
		]);

    }
}
