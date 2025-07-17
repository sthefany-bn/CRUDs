<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Pet::all();
        return view('home', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Pet();
        $dados->nomePet = $request->input('nomePet');
        $dados->idadePet = $request->input('idadePet');
        $dados->nomeDono = $request->input('nomeDono');
        $dados->telefone = $request->input('telefone');
        $dados->save();
        return redirect('/')->with('success', 'Novo pet cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Pet::find($id);
        if (isset($dados)) {
            return view('editar', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Pet::find($id);
        if (isset($dados)) {
            $dados->nomePet = $request->input('nomePet');
            $dados->idadePet = $request->input('idadePet');
            $dados->nomeDono = $request->input('nomeDono');
            $dados->telefone = $request->input('telefone');
            $dados->save();
            return redirect('/')->with('success', 'Atualizado com sucesso.');
        }
        return redirect('/')->with('danger', 'Erro ao atualizar dados.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Pet::find($id);
        if (isset($dados)) {
            $dados->delete();
            return redirect('/')->with('success', 'Pet deletado com sucesso.');
        }
        return redirect('/')->with('danger', 'Erro ao deletar.');
    }
}
