<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibliotecaExercicio;

class ExerciciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercicios = BibliotecaExercicio::all();

        return view('admin.exercicios.exercicios', compact('exercicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.exercicios.exercicios_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'NomeExercicio' => 'required|string|max:255',
            'Tipo_Exerc' => 'required|string|max:255',
            'CodigoAdm' => 'required|integer',
        ]);

        // Criação do novo exercício
        BibliotecaExercicio::create($request->all());

        return redirect()->route('exercicios.index')->with('success', 'Exercício criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BibliotecaExercicio $exercicio)
    {
        return view('admin.exercicios.exercicios_delete', compact('exercicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BibliotecaExercicio $exercicio)
    {
        return view('admin.exercicios.exercicios_edit', compact('exercicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BibliotecaExercicio $exercicio)
    {
        // Validação dos dados
        $request->validate([
            'NomeExercicio' => 'required|string|max:255',
            'Tipo_Exerc' => 'required|string|max:255',
            'CodigoAdm' => 'required|integer',
        ]);

        // Atualização do exercício
        $exercicio->update($request->all());

        return redirect()->route('exercicios.index')->with('success', 'Exercício atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BibliotecaExercicio $exercicio)
    {
        $exercicio->delete();

        return redirect()->route('exercicios.index')->with('success', 'Exercício removido com sucesso!');
    }
}
