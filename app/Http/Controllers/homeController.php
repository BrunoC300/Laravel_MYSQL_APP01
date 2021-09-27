<?php

namespace App\Http\Controllers;
use App\Models\motivo;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function home()
    {

        $motivos=motivo::all();

        return view('site.home', ['motivos' => $motivos]);
    }
}
