<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function index()
    {

        //Este retorna todos os resultados numa página
        //$clientes = cliente::all();

        //Para retornar um certo numero por página usamos paginate(n de elementos):
        $clientes = cliente::paginate(20);

        return view('app.cliente', ['clientes' => $clientes]);
    }
    public function remover($id)
    {
        cliente::find($id)->delete();

        return redirect()->route('app.clientes');
    }
}
