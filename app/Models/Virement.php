<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_beneficiaire',
        'id_emetteur',
        'montant',
        'type',
        'motif',
    ];
}
