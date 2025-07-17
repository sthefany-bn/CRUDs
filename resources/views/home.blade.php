@extends('modelo')

@section('conteudo')
    <div class="separa">
        <h2>Lista de Pet's</h2>
        <buttun class="btn success">
            <a href="/cadastro" class="nav-link">Cadastrar</a>
        </buttun>
    </div><br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nome do Pet</th>
                <th>Idade do Pet</th>
                <th>Nome do Dono</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nomePet}}</td>
                <td>{{$item->idadePet}}</td>
                <td>{{$item->nomeDono}}</td>
                <td>{{$item->telefone}}</td>
                <td>
                    <button class="btn save">
                        <a href="/editar/{{$item->id}}">Editar</a>
                    </button>

                    <button class="btn cancel">
                        <a href="/deletar/{{$item->id}}"
                        onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection