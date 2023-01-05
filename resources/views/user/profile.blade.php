
@extends('layouts.master')

@section('contenu')

<div class="container my-5">
    <div class="card card-300">
    <div class="card-header">
        <div class="card-title">
            <h1 class="text-center">{{ Auth::user()->name.' '.Auth::user()->lastname }}</h1>
        </div>
    </div>
        <div class="card-body">
            <table class="h5 mx-5 tb-profile" >
            <tr>
                <td > Nom : </td>
                <td class="px-5">{{ Auth::user()->name }}</td>
            </tr>

            <tr class="h5">
                <td> Prenom : </td>
                <td class="px-5">{{ Auth::user()->lastname }}</td>
            </tr>

            <tr class="h5">
                <td>Date de naissance : </td>
                <td class="px-5">{{ Auth::user()->date_naissance }}</td>
            </tr>

            <tr class="h5">
                <td>Numero_CIN : </td>
                <td class="px-5">{{ Auth::user()->numero_CNI }}</td>
            </tr>
            <tr class="h5">
                <td>Addresse: </td>
                <td class="px-5">{{ Auth::user()->adresse }}</td>
           </tr>
            <tr class="h5">
                <td>telephone : </td>
                <td class="px-5">{{ Auth::user()->telephone }}</td>
            </tr>

            <tr class="h5">
                <td>Email : </td>
                <td class="px-5">{{ Auth::user()->email }}</td>
            </tr>
            </table>
        </div>

        <div class="card-footer">
            <a href="{{route('modifProfil') }}"><button class="btn bg-blue text-white">Modifier Profile</button></a>
        </div>
    </div>
</div>


@endsection

