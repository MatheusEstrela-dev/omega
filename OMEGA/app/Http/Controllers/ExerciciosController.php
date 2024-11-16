<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibliotecaExercicio;

class ExerciciosController extends Controller
{

    public function __construct()
    {
        $this->exercicio = new BibliotecaExercicio();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercicios = BibliotecaExercicio::all();
        return view('admin.exercicios.index', ['exercicios' => $exercicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.exercicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->exercicio->create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'categoria' => $request->input('categoria'), // Ajuste conforme sua tabela
        ]);

        if ($created) {
            return redirect()->route('admin.exercicios.index')->with('message', 'Exercício criado com sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao criar exercício.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BibliotecaExercicio $exercicio)
    {
        return view('admin.exercicios.show', ['exercicio' => $exercicio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BibliotecaExercicio $exercicio)
    {
        return view('admin.exercicios.edit', ['exercicio' => $exercicio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->exercicio->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('admin.exercicios.index')->with('message', 'Exercício atualizado com sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao atualizar exercício.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->exercicio->where('id', $id)->delete();
        return redirect()->route('admin.exercicios.index')->with('message', 'Exercício excluído com sucesso!');
    }
}
