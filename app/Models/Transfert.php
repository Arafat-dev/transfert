<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numero',
        'montant',
        'motif',
        'date_transfert'
    ];


    public function user(){

        return $this->belongsTo(User::class);
    }
}
