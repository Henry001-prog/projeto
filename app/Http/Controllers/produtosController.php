<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produtos;

class produtosController extends Controller
{
    public function index() {
        $produtos2 = produtos::all();
        $total = produtos::all()->count();
        //$produtoss = produtos::orderBy('created_at', 'desc')->paginate(10);
        return view('list-produtos2', compact('produtos2', 'total'));
    }
    public function create() {
        return view('include-produto');
    }
    public function store(Request $request) {
        $produtos = new produtos;
        $produtos->name = $request->name;
        $produtos->price = $request->price;
        $produtos->entry_date = $request->entry_date;
        $produtos->id_produtos = $request->id_produtos;
        $produtos->type = $request->type;
        $produtos->value = $request->value;
        //$produtos = $produtos->create(request->all());
        $produtos->save();
        return redirect()->route('produtos.index')->with('message', 'Conta de produtos criada com sucesso!');
    }
    public function show($id) {
        //
    }
    public function edit($id) {
        $produtos = produtos::findOrFail($id);
        return view('alter-produtos', compact('produtos'));
    }
    public function update(Request $request, $id) {
        $produtos = produtos::findOrFail($id);
        $produtos->name = $request->name;
        $produtos->phone = $request->phone;
        $produtos->save();
        return redirect()->route('produtos.index')->with('message', 'Dados do produtos alterados com sucesso!');
    }
    public function destroy($id) {
        $produtos = produtos::findOrFail($id);
        $produtos->delete();
        return redirect()->route('produtos.index')->with('message', 'Produto excluído com sucesso!');
    }
}

