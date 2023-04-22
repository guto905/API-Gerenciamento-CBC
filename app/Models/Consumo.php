<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $table = 'consumos';

    protected $fillable = [
        'clube_id',
        'recurso_id',
        'valor_consumo'
    ];

    protected $casts = [
        'valor_consumo' => 'float'
    ];

    public function clube()
    {
        return $this->belongsTo('App\Models\Clube', 'clube_id', 'id');
    }

    public function recurso()
    {
        return $this->belongsTo('App\Models\Recurso', 'recurso_id', 'id');
    }
}
