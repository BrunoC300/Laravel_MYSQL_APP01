<h1>Clientes</h1>
<hr>
<form action="{{ route('app.clientes.update', $cliente->id) }}" method="post">
    @csrf
    <input name="nome" value="{{ $cliente->nome }}" type="text">
    <br>
    <input name="pais" value="{{ $cliente->pais }}" type="text">
    <br>
    <input name="email" value="{{ $cliente->email }}" type="text">
    <br>
    <button type="submit">ATUALIZAR</button>
</form>
