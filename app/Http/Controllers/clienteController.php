<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class clienteController extends Controller
{
    public function index() {
        $clientes = cliente::all();
        $total = cliente::all()->count();
        //$clientes = Cliente::orderBy('created_at', 'desc')->paginate(10);
        return view('welcome', compact('clientes', 'total'));
    }
    public function create() {
        return view('welcome');
    }
    public function store(Request $request) {
        $cliente = new cliente;
        //$cliente->id = $request->id;
        $cliente->name = $request->name;
        $cliente->cpf = $request->cpf;
        $cliente->address = $request->address;
        $cliente->telephone = $request->telephone;
        //$cliente->id_client = $request->id_client;
        //$cliente->type = $request->type;
        //$cliente->value = $request->value;
        //$cliente = $cliente->create(request->all());
        $cliente->save();
        //Cliente::create($cliente);
        return redirect()->route('welcome2')->with('message', 'Conta de cliente criada com sucesso!');
    }
    public function show($id) {
        //
    }
    public function edit($id) {
        $cliente = cliente::findOrFail($id);
        return view('alter-cliente', compact('cliente'));
    }
    public function update(Request $request, $id) {
        $cliente = cliente::findOrFail($id);
        $cliente->name = $request->name;
        $cliente->phone = $request->phone;
        $cliente->save();
        return redirect()->route('cliente.index')->with('message', 'Dados do cliente alterados com sucesso!');
    }
    public function destroy($id) {
        $cliente = cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('message', 'Cliente excluído com sucesso!');
    }
}

