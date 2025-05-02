<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }


    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return response()->json($curso);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'link' => 'required|url',
            'imagem' => 'required|image|max:2048',
        ]);

        $path = $request->file('imagem')->store('cursos', 'public');
        $validated['imagem'] = $path;

        $curso = Curso::create($validated);

        return response()->json([
            'message' => 'Curso criado com sucesso!',
            'curso' => $curso
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'link' => 'required|url',
            'imagem' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('cursos', 'public');
            $validated['imagem'] = $path;
        }

        $curso->update($validated);

        return response()->json([
            'message' => 'Curso atualizado com sucesso!',
            'curso' => $curso
        ]);
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return response()->json([
            'message' => 'Curso excluído com sucesso!'
        ]);
    }
}