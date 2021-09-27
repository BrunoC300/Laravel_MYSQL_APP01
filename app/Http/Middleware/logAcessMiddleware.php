<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use App\Models\logAccess;
use Illuminate\Http\Request;

class logAcessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //$request - manipular o request (pedido) e dar seguimento
        //return $next($request);
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        logAccess::create(['log' => "IP $ip requisitou a rota $rota"]);
        //$response - manipular a response (response)
        //exemplo: não executar o return anterior e executar o return de response
        $resposta = $next($request);

        //dd($resposta);

        $resposta->setStatusCode(201, "o status e o texto foram alterados!");
        return $resposta;
    }
}
