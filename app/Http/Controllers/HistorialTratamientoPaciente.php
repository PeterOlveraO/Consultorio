<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class HistorialTratamientoPaciente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'dentista_id' => 'required|exists:dentistas,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'tratamiento_id' => 'required|exists:lista_tratamientos,id',
            'observaciones' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
            'estado_id' => 'required|exists:estados_cita,id'
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
