<?php

namespace App\Http\Controllers;

use App\Models\ListaTratamientos;
use Illuminate\Http\Request;

class ListaTratamientoController extends Controller
{
    public function index()
    {
        return response()->json(ListaTratamientos::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $tratamiento = ListaTratamientos::create($request->all());
        return response()->json($tratamiento, 201);
    }

    public function show(ListaTratamientos $lista_tratamiento)
    {
        return response()->json($lista_tratamiento, 200);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, ListaTratamientos $lista_tratamiento)
    {
        $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $lista_tratamiento->update($request->all());
        return response()->json($lista_tratamiento, 200);
    }

    public function destroy(ListaTratamientos $lista_tratamiento)
    {
        $lista_tratamiento->delete();
        return response()->json(null, 204);
    }
}
