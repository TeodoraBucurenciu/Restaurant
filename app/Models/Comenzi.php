<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comenzi extends Model
{
    use HasFactory;

    protected $table='comenzi';

    protected $fillable =[
        'nr_masa',
        'status_comanda',
    ];
}
