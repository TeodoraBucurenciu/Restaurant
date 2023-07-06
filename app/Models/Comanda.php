<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    protected $table='comanda';

    protected $fillable =[
        'cantitate',
        'id_comanda',
        'id_produs',
        'id_tip_produs',
        'pretComanda',
    ];
}
