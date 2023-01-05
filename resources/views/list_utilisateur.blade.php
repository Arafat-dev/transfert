
@extends("layouts.master")

@section("contenu")

<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">

    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Liste dess utilisateur</h1>

    </div>

  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">

    <h3 class="border-bottom pb-2 mb-4">Liste dess utilisateur</h3>




    <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">date_naissance</th>
            <th scope="col">numero_CNI</th>
            <th scope="col">adresse</th>
            <th scope="col">mail</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($users as $user )

          <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{$user->date_naissance }}</td>
            <td>{{$user->numero_CNI }}</td>
            <td>{{$user->adresse }}</td>
            <td>{{$user->email }}</td>

          </tr>

          @endforeach

        </tbody>


      </table>
      {{ $users->links() }}
  </div>



@endsection
