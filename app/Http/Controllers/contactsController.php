<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siteContacto;
use function PHPUnit\Framework\isNull;
use App\Models\motivo;

class contactsController extends Controller
{
    public function contacts(Request $request)
    {
        $motivos = motivo::all();


        return view('site.contacts', ['titulo' => 'First app - Contacto (variavel)', 'motivos' => $motivos]);
    }


    public function guardar(Request $request)
    {
        //var_dump($_POST);
        //dd($request);
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // echo $request->input('nome');
        // echo "<br>";
        // echo $request->input('email');

        //Sem fill

        /*$contacto = new siteContacto();
        $contacto->nome = $request->input('nome');
        $contacto->telefone = $request->input('telefone');
        $contacto->email = $request->input('email');
        $contacto->motivo = $request->input('motivo');
        $contacto->mensagem = $request->input('mensagem');

        $contacto->save();*/

        // Com fill 

        /*
        $contacto = new siteContacto();
        $contacto->fill($request->all());
        $contacto->save();*/

        $request->validate(
            [
                'nome' => 'required|min:3|max:40', //minimo de 3 caracteres e maximo de 40
                'telefone' => 'required',
                'email' => 'email',
                'motivos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ],
            [
                'nome.required' => "Tem de indicar o nome",
                'nome.min' => "O nome tem de conter mais de 3 caracteres",
                'nome.max' => "O nome tem de conter menos de 40 caracteres",

                //metodo generalista
                'required' => "Tem de indicar o :attribute",

                'mensagem.max' => "A mensagem tem de ter no máximo 2000 caracteres",
                'email.email' => "O email indicado não é válido"

            ]
        );
        //ou em alternativa
        siteContacto::create($request->all());

        return redirect()->route('site.index');

        //return view('site.contacts', ['titulo' => 'First app - Contacto (variavel)']);
    }
}
