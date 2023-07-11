<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemComanda extends Model
{
    protected $table='iteme_comanda';
    protected $fillable =[
        'cantitate',
        'id_produs',
        'id_comanda',
    ];

    public function comanda()
    {
        return $this->hasOne(Comenzi::class, 'id_comanda');
    }
}
