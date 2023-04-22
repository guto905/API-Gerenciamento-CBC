<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
    protected $table = 'clubes';

    protected $fillable = [
        'clube',
        'saldo_disponivel'
    ];

    protected $casts = [
        'saldo_disponivel' => 'float'
    ];

    public function consumos()
    {
        return $this->hasMany('App\Models\Consumo', 'clube_id', 'id');
    }
}
