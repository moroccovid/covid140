@extends('layouts.backend')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gestion des Fiches d'investigation</h2>
        </div>

    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Archive des Fiches</h6>
            </div>
<div class="card-body">
 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 <tr>
   <th>No</th>
   <th>Nom</th>
   <th>Email</th>
   <th>Telephone</th>
   <th>Etat</th>
   <th width="280px">Action</th>
 </tr>
 @if(!empty($fiches) && $fiches->count())
    @foreach ($fiches as $key => $fiche)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $fiche->nom }}</td>
        <td>{{ $fiche->email }}</td>

        <td>{{ $fiche->telephone }}</td>
        <td>@if ($fiche->positif == 0) negatif @else positif @endif </td>

        <td>

        <a class="btn btn-primary" href="{{ route('traitemants.show',$fiche->id) }}">Detail</a>

        </td>
    </tr>
    @endforeach
    @else
            <tr>
                <td colspan="10"> Tableau vide.</td>
            </tr>
   @endif
</table>

{!! $fiches->render() !!}

</div>
</div>

</div>
@endsection
