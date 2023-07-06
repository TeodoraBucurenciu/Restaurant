<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrare extends Model
{
    use HasFactory;

    protected $table ='administrare';

    protected $fillable =[
        'password',
        'type',
        'username',
    ];
}
