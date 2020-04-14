@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Les fiches non traitees</div>

                <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                    <th>No</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Telephone</th>

                    </tr>
                @if(!empty($fiches) && $fiches->count())
                        @foreach ($fiches as $key => $fiche)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $fiche->nom }}</td>
                            <td>{{ $fiche->email }}</td>

                            <td>{{ $fiche->telephone }}</td>


                        </tr>
                        @endforeach
                        @else
                                <tr>
                                    <td colspan="10"> Tableau vide.</td>
                                </tr>
                    @endif
                </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Le graphe de la contamination</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
