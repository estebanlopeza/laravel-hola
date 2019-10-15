<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Company;
use App\Events\NewClienteHasRegisteredEvent;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except('index');
    }

    public function index(){

    	$clientes = Cliente::all();

		return view('clientes.index', compact('clientes'));

    }

    public function create(){
        $companies = Company::all();
        $cliente = new Cliente();

        return view('clientes.create', compact('companies', 'cliente'));
    }

    public function store(){

    	$cliente = Cliente::create($this->validateRequest());

        event(new NewClienteHasRegisteredEvent($cliente));

    	//return redirect('clientes');

    }

    public function show(Cliente $cliente){

        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){

        $companies = Company::all();

        return view('clientes.edit', compact('cliente', 'companies'));
    }

    public function update(Cliente $cliente){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        $cliente->update($this->validateRequest());

        return redirect('clientes/' . $cliente->id);
    }

    public function destroy(Cliente $cliente){

        $cliente->delete();
        return redirect('clientes');

    }

    private function validateRequest(){
        
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }

}
