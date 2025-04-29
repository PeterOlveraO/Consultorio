<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        return response()->json(Cita::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'dentista_id' => 'required|exists:dentistas,id',
            'fecha' => 'required|date',
            'comentarios' => 'required|string',
            'dentistatratamiento_id' => 'required|exists:dentistas_tratamientos,id',
            'estado_id' => 'required|exists:estados_cita,id'
        ]);

        $cita = Cita::create($request->all());
        return response()->json($cita, 201);
    }

    public function show(Cita $cita)
    {
        return response()->json($cita, 200);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'paciente_id' => 'sometimes|exists:pacientes,id',
            'dentista_id' => 'sometimes|exists:dentistas,id',
            'fecha' => 'sometimes|date',
            'motivo' => 'sometimes|string',
            'estado' => 'sometimes|in:Pendiente,Confirmada,Cancelada',
        ]);

        $cita->update($request->all());
        return response()->json($cita, 200);
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return response()->json(null, 204);
    }
}
