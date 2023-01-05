<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Virement;
use Illuminate\Support\Facades\Auth;


class VirementController extends Controller
{


    public function create(){

        return view('user.virement');
    }

    public function virement(Request $request){

         $users = User::find(Auth::user()->id);
         $userDest = User::where('numero_compte', $request->rib)->first();

         $userDest->solde = $userDest->solde + $request->montant;
         $userDest->save();


         $users->solde = Auth::user()->solde - $request->montant;

         $users->save();

         Virement::create([
            'id_beneficiaire'=>$userDest->id,
            'id_emetteur'=>$users->id,
            'montant'=>$request->montant,
            'motif'=>$request->motif,
         ]);

         Transaction::create([
            'id_beneficiaire'=>$userDest->id,
            'user_id'=>$users->id,
            'montant'=>$request->montant,
            'date_transaction'=>now(),
            'type'=>'virement',
            'status'=>'executé',
            'details'=>$request->motif
         ]);
    }



}
