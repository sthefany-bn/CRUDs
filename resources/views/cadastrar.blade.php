@extends('modelo')

@section('conteudo')
<h2>CADASTANDO UM NOVO PET</h2><br>
<form action="{{route('storePet')}}" method="POST">
    @csrf
    <div class="input">
        <label for="nomePet">Nome do Pet:</label>
        <input type="text" name="nomePet" placeholder="Informe o nome do pet">
    </div>

    <div class="input">
        <label for="idadePet">Idade do Pet:</label>
        <input type="number" name="idadePet" placeholder="Informe a idade do pet">
    </div>

    <div class="input">
        <label for="nomeDono">Nome do Dono:</label>
        <input type="text" name="nomeDono" placeholder="Informe o nome do dono do pet">
    </div>

    <div class="input">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" maxlength="11" placeholder="()_____-____">
    </div>

    <button type="button" class="btn cancel">
        <a href="{{ route('indexPet') }}">Voltar</a>
    </button>
    <button type="submit" class="btn save">Salvar</button>

</form>
@endsection