

@extends('layouts.master')

@section('contenu')
<!-- dahboard area start -->
<section>
    <div class="dashboard-area pt-150 pb-100 mt-5 ">
        <div class="container">
            <div class="row">
                @include('layouts.partials.sidebar')
                <div class="col-lg-9">
                    <div class="main-container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="header-section">
                                    <h4>Tableau de bord</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="account-number f-right">
                                    <p><strong>Numero de compte:</strong>{{ Auth::user()->numero_compte }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-card position-relative">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="count">
                                                    <h4 id="balance">
                                                        <span class="loader">
                                                            <img src="" alt="" width=100>
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="gridicons:money" data-inline="false"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="balence-label">
                                                    <p>Solde Courant</p>
                                                     <p>{{ Auth::user()->solde }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-card position-relative">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="count">
                                                    <h4 id="deposit">
                                                        <span class="loader">
                                                            <img src="" alt="" width=100>



                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="bx:bxs-package" data-inline="false"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="balence-label">
                                                    <p>Total de depot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-card position-relative">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="count">
                                                    <h4 id="withdraw">
                                                        <span class="loader">
                                                            <img src="" alt="" width=100>
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="uil:money-withdraw" data-inline="false"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="balence-label">
                                                    <p>Total retrait</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest Transaction -->
                            <br>


                         <div class="card">
                                <div class="card-header">
                                    <h5>Dernier Transactions</h5>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table">
                                        <div class="table-loader text-center">
                                            <span class="loader">
                                                <img src="" alt="" width=100>
                                            </span>
                                        </div>
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Trx ID</th>
                                            <th scope="col">Montant</th>
                                            <th scope="col">transaction</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date / Time</th>
                                            <th scope="col">Details</th>
                                        </tr>
                                        </thead>
                                        <tbody class="transactions">
                                              @foreach ($historiques as $historique )
                                                 <tr>
<th></th>
                                                    <td>{{ $historique->id }}</td>
                                                    <td>{{ $historique->montant }}</td>
                                                    <td>{{ $historique->type }}</td>
                                                    <td>{{ $historique->type}}</td>
                                                    <td>{{ $historique->status }}</td>
                                                    <td>{{ $historique->created_at }}</td>
                                                    <td>{{ $historique->details }}</td>
                                                 </tr>

                                              @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dahboard area end -->
<input type="hidden" id="user_info" value="">
<input type="hidden" id="transaction_url" value="">
@endsection

@push('js')
<script src=""></script>
@endpush
