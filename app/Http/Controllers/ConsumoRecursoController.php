<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clube;
use App\Models\Recurso;

class ConsumoRecursoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'clube_id' => 'required|numeric',
            'recurso_id' => 'required|numeric',
            'valor_consumo' => 'required|numeric|min:0'
        ]);

        $clube = Clube::findOrFail($request->clube_id);
        $recurso = Recurso::findOrFail($request->recurso_id);

        if ($clube->saldo_disponivel < $request->valor_consumo) {
            return response()->json('O saldo disponível do clube é insuficiente.', 400);
        }

        $clube->saldo_disponivel -= $request->valor_consumo;
        $recurso->saldo_disponivel -= $request->valor_consumo;

        $clube->save();
        $recurso->save();

        return response()->json([
            'clube' => $clube->clube,
            'saldo_anterior' => $clube->saldo_disponivel + $request->valor_consumo,
            'saldo_atual' => $clube->saldo_disponivel
        ]);
    }
}
