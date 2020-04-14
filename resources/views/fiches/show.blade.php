@extends('layouts.backend')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Détail de la Fiche d'investigation</h2>
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
            <strong>Telephone:</strong>
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
            <strong>Duree Toux:</strong>
            {{ $fiche->dureet }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Test Covide:</strong>
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
