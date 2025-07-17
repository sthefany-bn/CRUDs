@extends('modelo')

@section('conteudo')
<h2>EDITANDO UM NOVO PET</h2><br>
<form action="{{route('updatePet', $dados->id)}}" method="POST">
    @csrf
    <div class="input">
        <label for="nomePet">Nome do Pet:</label>
        <input type="text" name="nomePet" value="{{$dados->nomePet}}">
    </div>

    <div class="input">
        <label for="idadePet">Idade do Pet:</label>
        <input type="number" name="idadePet" value="{{$dados->idadePet}}">
    </div>

    <div class="input">
        <label for="nomeDono">Nome do Dono:</label>
        <input type="text" name="nomeDono" value="{{$dados->nomeDono}}">
    </div>

    <div class="input">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" maxlength="11" value="{{$dados->telefone}}">
    </div>

    <button type="button" class="btn cancel">
        <a href="{{ route('indexPet') }}">Voltar</a>
    </button>
    <button type="submit" class="btn save">Salvar</button>

</form>
@endsection