<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Retrait;

use App\Http\Controllers\Controller;


class RetraitController extends Controller
{
    //



    public function store(Request $request ){

        $request->validate([
            'montant' => ['required'],
            'numero' => ['required'],
            ]);

            $users = User::find(Auth::user()->id);

            $users->solde=Auth::user()->solde - $request->montant;

            $users->save();

            Retrait::create([
                'user_id'=>$users->id,
                'montant'=>$request->montant,
                'date_retrait'=>now(),
                'numero'=>$request->numero,
                'motif'=>$request->motif
            ]);


            Transaction::create([
                'id_beneficiaire'=>$users->id,
                'user_id'=>$users->id,
                'montant'=>$request->montant,
                'date_transaction'=>now(),
                'type'=>'Retrait',
                'status'=>'executé',
                'details'=>$request->motif
             ]);

        return redirect()->intended(RouteServiceProvider::HOME)->back()->with("success", "retrait effectuer avec succès");

    }
}
