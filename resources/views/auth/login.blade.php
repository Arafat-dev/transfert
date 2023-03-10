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
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="mt-2" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-blue1 h5">Se Rappeler de moi</span>
                </label>
            </div>

            <div class="">
                <span>Si vous n'avez pas de compte, </span><a class="text-blue2 underline" href="{{ route('register') }}">inscrirez-vous</a>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-blue2" href="{{ route('password.request') }}">
                        Mot de passe oublier ?
                    </a>
                @endif

                <button class="ml-3 btn bg-blue">
                    Se connecter
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection
