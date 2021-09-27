{{ $slot }}
<form action="{{ route('site.contacts') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone"
        class="{{ $classe }}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="motivos_id" class="{{ $classe }}">
        <option value="0">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivos_id') == $motivo->id ? 'selected' : '' }}>
                {{ $motivo->motivo }}</option>
        @endforeach
    </select>
    {{ $errors->has('motivos_id') ? $errors->first('motivos_id') : '' }}
    <br>
    <textarea name="mensagem" class="{{ $classe }}">@if (old('mensagem') != ''){{ old('mensagem') }}@else Preencha aqui a sua mensagem @endif    
    </textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
{{-- @if ($errors->any())
    <div style="position: absolute; top: 0px; left: 0px; width: 100%; background-color: red;">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif --}}
