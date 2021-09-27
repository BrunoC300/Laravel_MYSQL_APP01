<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\logAcessMiddleware;

class aboutusController extends Controller
{
    public function __construct()
    {
        $this->middleware('log.access');
    }
    public function aboutus()
    {
        return view('site.aboutus');
    }
}
