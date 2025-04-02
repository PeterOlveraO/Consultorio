<?php

namespace App\Http\Controllers;
use App\Models\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Dentista::all(), 200);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:dentistas,email',
            'direccion' => 'nullable|string|max:255',
            'contrasena' => 'required|string|min:6',
            'es_administrador' => 'boolean',
        ]);

        $dentista = Dentista::create($request->all());

        return response()->json($dentista, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dentista $dentista)
    {
        //
        return response()->json($dentista, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dentista $dentista)
    {
        //
        $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'apellido' => 'sometimes|string|max:255',
            'especialidad' => 'sometimes|string|max:255',
            'telefono' => 'sometimes|string|max:20',
            'email' => 'sometimes|email|unique:dentistas,email,' . $dentista->id,
            'direccion' => 'sometimes|string|max:255',
            'contrasena' => 'sometimes|string|min:6',
            'es_administrador' => 'sometimes|boolean',
        ]);

        $dentista->update($request->all());

        return response()->json($dentista, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dentista $dentista)
    {
        //
        $dentista->delete();
        return response()->json(null, 204);
    }
}
