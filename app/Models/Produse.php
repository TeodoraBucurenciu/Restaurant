<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produse extends Model
{
    use HasFactory;

    protected $table ='produse';

    protected $fillable =[
        'numeProdus',
        'pret',
        'tipProdus',
    ];

}
