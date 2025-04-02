<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DentistaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ListaTratamientoController;
use App\Http\Controllers\DentistaTratamientoController;


Route::apiResource('dentistas', DentistaController::class);
Route::apiResource('pacientes', PacienteController::class);
Route::apiResource('citas', CitaController::class);
Route::apiResource('listas_tratamientos', ListaTratamientoController::class);
Route::apiResource('dentistas_tratamientos', DentistaTratamientoController::class);