<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recursos';

    protected $fillable = [
        'recurso',
        'saldo_disponivel'
    ];

    protected $casts = [
        'saldo_disponivel' => 'float'
    ];

    public function consumos()
    {
        return $this->hasMany('App\Models\Consumo', 'recurso_id', 'id');
    }
}
