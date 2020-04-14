@extends('layouts.backend')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gestion Utilisateurs</h2>
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
              <h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs</h6>
            </div>
<div class="card-body">
 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 <tr>
   <th>No</th>
   <th>Nom</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @if(!empty($data) && $data->count())
    @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
        @endif
        </td>
        <td>
      <!--  <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Afficher</a> -->
        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Modifier</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    @else
            <tr>
                <td colspan="10"> Tableau vide.</td>
            </tr>
   @endif
</table>

{!! $data->render() !!}

</div>
</div>
<div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Créer un nouveau utilisateur</a>
</div>

</div>
@endsection
