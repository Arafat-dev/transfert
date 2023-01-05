<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'numero_compte',
        'RIB',
        'type',
        'date_ouverture',
        'solde',
        'id_user',
        'id_agence',
    ];
}
