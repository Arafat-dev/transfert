<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Stores;
use App\Models\Transaction;


class PaiementController extends Controller
{




    public function paiement_service(Request $request){


            $users = User::find(Auth::user()->id);


            $boutique = Stores::find($request->boutique);

            $boutique->solde = $boutique->solde+ $request->montant;
            $boutique->save();


            $users->solde = Auth::user()->solde - $request->montant;

            $users->save();



            Transaction::create([
               'id_beneficiaire'=>$users->id,
               'user_id'=>$users->id,
               'montant'=>$request->montant,
               'date_transaction'=>now(),
               'type'=>'paiement service',
               'status'=>'executé',
               'details'=>$request->motif
            ]);

        }
            public function paiement_scolaire(Request $request){


                $users = User::find(Auth::user()->id);


                $school = Schools::find($request->ecole);

                $school->solde = $school->solde+ $request->montant;
                $school->save();


                $users->solde = Auth::user()->solde - $request->montant;

                $users->save();



                Transaction::create([
                   'id_beneficiaire'=>$users->id,
                   'user_id'=>$users->id,
                   'montant'=>$request->montant,
                   'date_transaction'=>now(),
                   'type'=>'paiement Scolarité',
                'status'=>'executé',
                  'details'=>$request->motif
                ]);

    }
}
