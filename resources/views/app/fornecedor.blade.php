<h3>Fornecedores</h3>
@isset($fornecedores)

    @if(count($fornecedores)>0)
        <h4>Existem fornecedores registados!</h4>
    @else
        <h4>Não existem fornecedores registados!</h4>
    @endif
    
Primeiro: <br>
    Nome: {{ $fornecedores[0]['nome'] }}<br>
    Distrito:
    @switch($fornecedores[0]['distrito'])
        @case('13')
            {{ $fornecedores[0]['distrito'] }} - Porto<br>
            @break
        @case('2')
            {{ $fornecedores[0]['distrito'] }} - Braga
            @break
    @endswitch

    <br>
    Segundo: <br>
    {{ $fornecedores[1]['nome'] ?? 'Não existe' }}<br>
    @if(!@empty($fornecedores))
    {{-- Mostrar todo o conteúdo de um array--}}
    @dd($fornecedores)
    @endif

@endisset