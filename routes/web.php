<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\ConsumoRecursoController;

Route::get('/clubes', [ClubeController::class, 'index']);
Route::post('/clubes', [ClubeController::class, 'store']);
Route::post('/consumir-recurso', [ConsumoRecursoController::class, 'store']);
