<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'code_agence',
        'code_ville',
        'adresse',
    ];


 
}
