@extends('layouts.master')


<div class="pub p-5 bg-blue text-white rounded mb-5" style="width:100%; height:500px">
   <div class="">
      <h1>My Single Pay</h1>
      <p class="mb-4 text-bg-secondary p-2" style="width:30%; font-style:italic">Application Bancaire et de paiement</p>
   </div>
   <div class="flex-p">
      <p class="h5">Effectuer toutes vos operations bancaires ou paiements des Articles partout en afrique centrale avec <strong style="color:cyan"><u>My Single Pay</u></strong></p>
   </div>
</div>

<div class="container">

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="{{ asset('image/img1.jpg') }}" alt="Los Angeles" class="d-block w-100" height="430px">
  </div>
  <div class="carousel-item">
    <img src="{{ asset('image/img4.jpg') }}" alt="Chicago" class="d-block w-100" height="430px">
  </div>
  <div class="carousel-item">
    <img src="{{ asset('image/img3.jpg') }}" alt="New York" class="d-block w-100" height="430px">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
</div>


<div class="container mt-5 mb-5">
    <h4 class="h3 mr-5 text-center">Effectuer le paiement de sa scolarité en ligne, c'est bénéficier de tous <br>les avantages My Single Pay sans se déplacer</h4>

     <div class="row">

        <div class="col-4">
            <div class="card blo shadow-5" style=" height:250px">
              <div class="card-body">
                  <h5 class="card-title mb-3 p-3 text-center"></i>Paiement Rapide</h5>
                  <p class="card-text">Votre paiement sera executé instantament en un seul clic, Depuis votre Salon sans avoir besoin de se deplacer
                </p>
              </div>
            </div>
         </div>


        <div class="col-4">
            <div class="card shadow-5 blo" style=" height:250px">
                  <div class="card-body">
                      <h5 class="card-title  mb-3 p-3 text-center "> Paiement Sécurisé</h5>
                      <p class="card-text">Vous pouvez effectuer tout type de paiement En toute sécurité, avec l'une des applications bancaires les mieux notées </p>
                  </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card shadow-5 blo" style="height:250px">
                  <div class="card-body">
                      <h5 class="card-title  mb-3 p-3  text-center">Votre conseiller, votre agence</h5>
                      <p class="card-text">Près de chez vous, votre conseiller Arfa Bank vous accompagne dans vos projets</p>
                  </div>
            </div>
        </div>

    </div>
</div>




<div class="container pt-5 mt-5 mb-5">
        <h4 class="h3 my-5 text-center">My Single Pay en quelques mots</h4>

     <div class="row">

        <div class="col-4 ">
            <h3 class="text-center text-blue2" style="font-style:italic">Solution aux parents</h3>
            <div class="card blo" style="height:250px">
               <img src="{{asset('image/ecole.jpg')}}" width="100%" height="250px" alt="">
            </div>
        </div>

        <div class="col-4">
           <h3 class="text-center text-blue2" style="font-style:italic">Payement facile</h3>
            <div class="card blo" style="height:250px">
               <img src="{{asset('image/paiement.jpg')}}" width="100%" height="250px" alt="">
            </div>
        </div>


        <div class="col-4">
        <h3 class="text-center text-blue2" style="font-style:italic">Gerer ses transactions</h3>
            <div class="card blo" style="height:250px">
               <img src="{{asset('image/client.jpg')}}" width="100%" height="250px" alt="">
            </div>
        </div>



    </div>



</div>



<div class="container mt-5 mb-5">
    <h4 class="h3 my-5 text-center">Ouvrir en ligne votre compte bancaire, c'est bénéficier de tous <br>les avantages My Single Pay sans Se déplacer</h4>

     <div class="row">

        <div class="col-4">
            <div class="card shadow-5 blo" style=" height:250px">
              <div class="card-body">
                  <h5 class="card-title mb-3 "><i class="fa fa-credit-card pl-2" style="font-size:35px; color:#068c96; padding-right:5px"></i>Offre bancaire complète</h5>
                  <p class="card-text">  Assurances, crédits à la consommation, épargne… Des solutions adaptées à vos besoins
                </p>
              </div>
            </div>
         </div>


        <div class="col-4">
            <div class="card shadow-5 blo" style=" height:250px">
                  <div class="card-body">
                      <h5 class="card-title  mb-3 "> <i class="fa fa-mobile" style="font-size:35px; color:#068c96;"></i> La banque dans votre poche</h5>
                      <p class="card-text">En toute sécurité, avec l'une des applications bancaires les mieux notées </p>
                  </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card shadow-5 blo" style="height:250px">
                  <div class="card-body">
                      <h5 class="card-title  mb-3 "><i class="f fa-pen"></i>Votre conseiller, votre agence</h5>
                      <p class="card-text">Près de chez vous, votre conseiller Arfa Bank vous accompagne dans vos projets</p>
                  </div>
            </div>
        </div>

    </div>
</div>

@section('contenu')


@include('layouts.partials.services')

@include('layouts.partials.procedure')


@endsection

