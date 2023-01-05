
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
                        <div class="mt-4 mb-4" style="margin-left: 10%">
                            <form style="width: 65%; border-radius:15px;border:1px solid antiquewhite " class="p-4 shadow-sm bg-blue" method="post" action="{{ route('paiement_scolaire') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="bou" class="form-label">Ecole</label>
                                    <select name="ecole" id="bou">
                                        @foreach($ecole as $ecoles)
                                            <option value="{{$ecole->id}}">{{ecole->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="montant" class="form-label">Montant</label>
                                    <input type="text" class="form-control" name="montant" id="montant">
                                </div>

                                <div class="mb-3">
                                    <label for="motif" class="form-label">Nom Articles</label>
                                    <input type="text" class="form-control" name="motif" id="motif">
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">E-code</label>
                                    <input type="text" class="form-control" name="code" id="motif">
                                </div>
                                <div class="mx-5">

                                    <button type="submit" class="btn btn-primary px-4 mx-4">Valider</button>
                                    <button type="reset" class="btn btn-danger px-4">Annuler</button>

                                </div>

                            </form>
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


