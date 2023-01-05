<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Transaction;
use App\Models\Transfert;


class TransfertController extends Controller
{
    //

    public function store(Request $request){
        $request->validate([
            'montant' => ['required'],
            'numCompte' => ['required'],
            ]);

            $users = User::find(Auth::user()->id);

            $users->solde=Auth::user()->solde - $request->montant;

            $users->save();





        Transfert::create([
            'user_id'=>$users->id,
            'numero'=>$request->numCompte,
            'montant'=>$request->montant,
            'motif'=>$request->motif,
            'date_transfert'=>now()

        ]);

        Transaction::create([
            'id_beneficiaire'=>$users->id,
            'user_id'=>$users->id,
            'montant'=>$request->montant,
            'date_transaction'=>now(),
            'type'=>'Transfert',
            'status'=>'executé',
            'details'=>$request->motif
         ]);

    return back()->with("success", "retrait effectuer avec succès");

    }
}
