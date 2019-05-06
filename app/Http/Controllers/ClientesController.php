<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function list(){

    	$clientesActivos = Cliente::where('active', 1)->get();
    	$clientesInactivos = Cliente::where('active', 0)->get();


    	//dd($clientesInactivos);

    	$clientes = Cliente::all();

		return view('interna.clientes', [
			'clientesActivos' => $clientesActivos,
			'clientesInactivos' => $clientesInactivos,
		]);

    }

    public function store(){

    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'active' => 'required',
    	]);

    	$cliente = new Cliente();
    	$cliente->name = request('name');
    	$cliente->email = request('email');
    	$cliente->active = request('active');
    	$cliente->save();

    	return back();

    }
}
