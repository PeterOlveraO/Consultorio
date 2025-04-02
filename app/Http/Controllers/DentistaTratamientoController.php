<?php

namespace App\Http\Controllers;

use App\Models\DentistaTratamiento;
use Illuminate\Http\Request;

class DentistaTratamientoController extends Controller
{
    public function index()
    {
        return response()->json(DentistaTratamiento::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'dentista_id' => 'required|exists:dentistas,id',
            'tratamiento_id' => 'required|exists:lista_tratamientos,id',
        ]);

        $dentistaTratamiento = DentistaTratamiento::create($request->all());
        return response()->json($dentistaTratamiento, 201);
    }

    public function show(DentistaTratamiento $dentistas_tratamiento)
    {
        return response()->json($dentistas_tratamiento, 200);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, DentistaTratamiento $dentistas_tratamiento)
    {
        $request->validate([
            'dentista_id' => 'sometimes|exists:dentistas,id',
            'tratamiento_id' => 'sometimes|exists:lista_tratamientos,id',
        ]);

        $dentistas_tratamiento->update($request->all());
        return response()->json($dentistas_tratamiento, 200);
    }

    public function destroy(DentistaTratamiento $dentistas_tratamiento)
    {
        $dentistas_tratamiento->delete();
        return response()->json(null, 204);
    }
}
