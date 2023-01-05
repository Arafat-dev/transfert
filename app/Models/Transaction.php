<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[
       'id_beneficiaire',
       'user_id',
       'montant',
       'date_transaction',
       'type',
       'status',
       'details'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
