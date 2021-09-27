<?php

namespace Database\Seeders;

use App\Models\fornecedor;
use Illuminate\Database\Seeder;

class fornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dois métodos

        //instanciando o objeto
        $fornecedor = new fornecedor();
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.pt';
        $fornecedor->pais = 'PT';
        $fornecedor->email = 'mail@fornecedor1.pt';
        $fornecedor->save();

        //usando o método create (atenção fillable do model)
        fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.pt',
            'pais' => 'PT',
            'email' => 'mail@fornecedor2.pt'
        ]);
    }
}
