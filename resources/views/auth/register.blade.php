
@extends('layouts.master')

@section('contenu')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="card-header" ><img src="{{ asset('image/logo.png') }}"  style="margin: auto" alt=""></div>

        <form method="POST" action="{{ route('registered') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

             <!-- LastName -->
             <div>
                <x-input-label for="lastname" :value="__('LastName')" />

                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"  required autofocus />

                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

              <!-- Date Naissance -->
              <div>
                <x-input-label for="date_n" :value="__('Date Naissance')" />

                <x-text-input id="date_n" class="block mt-1 w-full" type="date" name="date_n" :value="old('Date naisssance')" required autofocus />

                <x-input-error :messages="$errors->get('date_n')" class="mt-2" />
            </div>

            <!-- CIN -->
            <div>
                <x-input-label for="cin" :value="__('Numero CIN')" />

                <x-text-input id="cin" class="block mt-1 w-full" type="text" name="cin" :value="old('Numero CIN')" required autofocus />

                <x-input-error :messages="$errors->get('cin')" class="mt-2" />
            </div>

              <!-- Addresse -->
              <div>
                <x-input-label for="adresse" :value="__('Adresse')" />

                <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('Adresse')" required autofocus />

                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
            </div>


               <!-- Tel -->
               <div>
                <x-input-label for="tel" :value="__('Telephone')" />

                <x-text-input id="tel" class="block mt-1 w-full" type="text" name="telephone" :value="old('Telephone')" required autofocus />

                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class=" block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-blue2 hover:text-blue2" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-4 btn bg-blue">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection
