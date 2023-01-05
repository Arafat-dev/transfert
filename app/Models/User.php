<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'date_naissance',
        'numero_CNI',
        'adresse',
        'telephone',
        'email',
        'role',
        'password',
        'numero_compte',
        'type',
        'date_ouverture',
        'solde',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function transferts(){
        return $this->hasMany(Transfert::class);
    }

    public function depots(){
        return $this->hasMany(Depot::class);
    }
    public function retraits(){
        return $this->hasMany(Retrait::class);
    }


}
