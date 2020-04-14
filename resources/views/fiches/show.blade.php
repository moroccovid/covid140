@extends('layouts.backend')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Détail de la Fiche d'invistigation</h2>

        </div>

        <div class="pull-left">

            <h3 style="color: red;">    Prediction de l'algorithme de décision : @if ($resultat == 1 ) il est fort probable que la personne est infectée par le Covid 19.    @else
    La personne est non infectée par le Covid 19.
@endif </h3>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom:</strong>
            {{ $fiche->nom }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $fiche->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Téléphone:</strong>
            {{ $fiche->telephone }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sexe:</strong>
            {{ $fiche->sexe }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age:</strong>
            {{ $fiche->age }}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Durée de Toux:</strong>
            {{ $fiche->dureet }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Test de Covide:</strong>
            {{ $covidetest}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confinement:</strong>
            {{ $confinement }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Maladies:</strong>
           {!!$maladies!!}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Symptomes:</strong>
                {!! $symptomes !!}
        </div>
    </div>

    {!! Form::model($fiche, ['method' => 'PATCH','route' => ['traitemants.update', $fiche->id]]) !!}

    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input class="form-check-input" type="checkbox" name="traite" id="traite"  @if($fiche->traite  == true) checked @endif >
                        <label class="form-check-label" for="gridRadios2">
                        Fiche Traitée
                        </label>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
                        <input class="form-check-input" type="checkbox" name="positif" id="positif"  @if($fiche->positif  == true) checked @endif >
                        <label class="form-check-label" for="gridRadios2">
                        Cas positif
                        </label>

     </div>

     <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Confirmer">
    </div>


     {!! Form::close() !!}

</div>
@endsection
