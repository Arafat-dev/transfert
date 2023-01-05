<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Compte;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'date_n' => ['required', 'date'],
            'cin' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' =>$request->lastname,
            'date_naissance' =>$request->date_n ,
            'numero_CNI' =>$request->cin ,
            'adresse' =>$request->adresse ,
            'telephone' =>$request->telephone ,
            'email' => $request->email,
            'role'=>"2",
            'password' => Hash::make($request->password),
            "numero_compte"=>random_int(3450072091, 9867555000),
            "type"=>"Compte courant",
            "date_ouverture"=>date(now()),
            "solde"=>0,
        ]);



        event(new Registered($user));


        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
