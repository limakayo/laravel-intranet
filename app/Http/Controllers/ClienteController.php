<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use Validator;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
    }

    public function index()
    {
        return response()->json(['clientes' =>Cliente::all()]);
    	//$clientes = Cliente::all();
        
        //return view('clientes.index', compact('clientes'));
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->input('nome');
        if ($cliente->save()) {
            return $cliente;
        } else {
            return response()->json(['message' => 'Erro']);
        }
        /*$validator = Validator::make($request->all(), [
            'nome' => 'required|max:45',
        ]);

        if ($validator->fails()) {
            return redirect('/');
        }

        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->save();

        return redirect('/cliente');*/
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());

        return redirect()->route('clientes.show', [$cliente]);
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect('/cliente');
    }
}
