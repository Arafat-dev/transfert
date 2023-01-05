<div class="col-lg-3">
    <div class="sidebar-area bg-blue p-5 shadow-sm" style="border-radius: 10px">
        <div class="sidebar-top-content text-center">
            <div class="user-img">
                {{-- <img src="{{ url('https://ui-avatars.com/api/?background=random&name='.Auth::user()->nom) }}" alt=""> --}}
            </div>
            <div class="user-name">
                {{-- <h3>{{ Auth::user()->name }}</h3> --}}
            </div>
        </div>
        <div class="slidebar-nav-area" >
            <nav>
                <ul>
                    <li class="nav-item"><a href="{{ route('dashboard') }}" class="active"><span class="iconify" data-icon="feather:home" data-inline="false"></span>Tableau de bord</a></li>

            <li class="">
                <p class=" btn btn-toggle rounded align-left collapsed text-white " data-bs-toggle="collapse" data-bs-target="#action-collapse" aria-expanded="true">
                Operations Banaire<span class="w-2"><i class="fa fa-angle-down h3"></i></span>
                </p>
                <div class="collapse" id="action-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="nav-item"><a href="{{ route('virement') }}" class="rounded">Virement</a></li>
                    <li class="nav-item"><a href="{{ route('transfert') }}" class="rounded"> Transfert</a></li>
                    <li class="nav-item"><a href="{{ route('depot') }}" class="rounded">Depot</a></li>
                    <li class="nav-item"><a href="{{ route('retrait') }}" class="rounded">Retrait</a></li>
                </ul>
                </div>
            </li>


            <li class="">
                <p class=" btn btn-toggle rounded align-left collapsed text-white " data-bs-toggle="collapse" data-bs-target="#action-collapse-paiement" aria-expanded="true">
                Service de Paiement<span class="w-2"><i class="fa fa-angle-down h3"></i></span>
                </p>
                <div class="collapse" id="action-collapse-paiement">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="nav-item"><a href="{{ route('paiement_school') }}" class="rounded">Paiement Scolarité</a></li>
                    <li class="nav-item"><a href="{{ route('paiement') }}"> Paiement Service</a></li>

                </ul>
                </div>
            </li>

            <li class="">
                <span class="btn btn-toggle align-items-center rounded collapsed text-white " data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Compte <span class="w-3"><i class="fa fa-angle-down h3"></i></span>
                </span>
                <div class="collapse" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="nav-item ml-5 pl-5"><a href="{{ route('depot') }}" class="pl-5 ml-5 rounded">Sous Compte</a></li>
                    <li class="nav-item ml-5 pl-5"><a href="{{ route('dashboard') }}" class="pl-5 ml-5 rounded">Transactions</a></li>
                    <li class="nav-item ml-5 pl-5"><a href="#" class="rounded">Paramétres</a></li>
                </ul>
                </div>
            </li>

            </ul>
            </nav>
        </div>
    </div>
</div>
