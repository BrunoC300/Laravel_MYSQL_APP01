<h1>Clientes</h1>
<table>
    <tr>
        <th>Nome</th>
        <th>País</th>
        <th>E-mail</th>
    </tr>
    @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->pais }}</td>
            <td>{{ $cliente->email }}</td>
            <td><a href="{{ route('app.clientes.editar', $cliente->id) }}">Editar</a></td>
            <td><a href="{{ route('app.clientes.remover', $cliente->id) }}">Apagar</a></td>
        </tr>
    @endforeach
</table>
{{ $clientes->links() }}
<hr>
<p><a href="{{ route('app.sair') }}">LOGOUT</a></p>
