<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clube;

class ClubeController extends Controller
{
    public function index()
    {
        $clubes = Clube::all();

        return response()->json($clubes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'clube' => 'required',
            'saldo_disponivel' => 'required|numeric|min:0'
        ]);

        $clube = Clube::create($request->all());

        return response()->json('ok');
    }
}
