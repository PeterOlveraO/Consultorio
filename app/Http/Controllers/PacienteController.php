<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        return response()->json(Paciente::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20'
        ]);

        $paciente = Paciente::create($request->all());
        return response()->json($paciente, 201);
    }

    public function show(Paciente $paciente)
    {
        return response()->json($paciente, 200);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'apellido' => 'sometimes|string|max:255',
            'fecha_nacimiento' => 'sometimes|date',
            'telefono' => 'sometimes|string|max:20',
            'email' => 'nullable|email|unique:pacientes,email,' . $paciente->id,
            'direccion' => 'sometimes|string|max:255',
        ]);

        $paciente->update($request->all());
        return response()->json($paciente, 200);
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return response()->json(null, 204);
    }
}
