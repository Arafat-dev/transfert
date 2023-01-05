<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\User\VirementController;

use App\Http\Controllers\User\RetraitController;

use App\Http\Controllers\User\TransfertController;

use App\Models\Transaction;
use App\Models\User;

use App\Models\Stores;
use App\Models\Schools;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard/paiement', function(){

    $boutiques = Stores::all();

    return view('paiementS', compact('boutiques'));
})->name('paiement');

Route::post('/dashboard/paiement', [PaiementController::class, 'paiement_service'])->name('paiement_service');



Route::get('/dashboard/paiement/scolaire', function(){

    $ecoles = Schools::all();

    return view('paiement_scolaire', compact('ecoles'));
})->name('paiement_school');

Route::post('/dashboard/paiementS', [PaiementController::class, 'paiement_scolaire'])->name('paiement_scolaire');



Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/Apropos', function(){
    return view('apropos');
})->name('propos');


Route::get('/dashboard', function () {


    $historiques = User::find(Auth::user()->id)->transactions;

    return view('layouts.dashboard',compact('historiques'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


// Login Route

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');


// Register Route

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('registered');

// User routes
Route::post('/dashboard/paiement', [PaiementController::class, 'paiement_service'])->name('paiement_service');

Route::get('/dashboard/depot', function(){

    $user = Auth::user();

     return view('user.depot', compact('user'));
})->name('depot');

Route::get('/dashboard/transfert', function(){
    return view('user.transfert');
})->name('transfert');

Route::post('/dashbord/depot', [DepositController::class, 'deposit'])->name('user.deposit');

Route::post('/dashbord/retrait', [RetraitController::class, 'store'])->name('user.retrait');

Route::post('/dashbord/transfert', [TransfertController::class, 'store'])->name('user.transfert');

Route::get('dashbord/retrait', function(){
    return view('user.retrait');
}
)->name('retrait');






Route::get('/index', [PageController::class, 'index']);


// user historique route

Route::get('/user/Depot/historique', function(){
    return view('user.historique.historiqueDepot');
})->middleware(['auth', 'verified'])->name('historique.depot');


// routes transfert



Route::get('/user/dashboard/virement', [VirementController::class, 'create'])->middleware(['auth', 'verified'])->name('virement');


Route::post('/user/virement', [VirementController::class, 'virement'])->name('virement1');




Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/profile/modifier', function (){
    return view('modifier_profile');
})->name('modifProfil');


