<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Transaction;

class DepositController extends Controller
{



    public function deposit(Request $request){

        $request->validate([
        'montant' => ['required'],
        'numero' => ['required'],
        ]);

            $users = User::find(Auth::user()->id);

            $users->solde=Auth::user()->solde + $request->montant;

            $users->save();

            Depot::create([
                'montant'=>$request->montant,
                'date_depot'=>now(),
                'sous_compte'=>$request->numero
            ]);
            Transaction::create([
                'id_beneficiaire'=>$users->id,
                'user_id'=>$users->id,
                'montant'=>$request->montant,
                'date_transaction'=>now(),
                'type'=>'depot',
                'status'=>'executé',
                'details'=>$request->motif
             ]);

        return back()->with("success", "Dépot effectuer avec succès");

    }
}
