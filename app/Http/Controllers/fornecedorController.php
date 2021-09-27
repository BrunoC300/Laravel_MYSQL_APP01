<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'distrito' => '13'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'distrito' => '2'
            ]
        ];

        $msg = isset($fornecedores[1]) ? "Existe a posição 1." : "Não existe a posição 1";
        echo $msg;

        return view('app.fornecedor', compact('fornecedores'));
    }
}
