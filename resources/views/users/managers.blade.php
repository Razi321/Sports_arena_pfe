
@extends('layouts.dashboardAdmin')
@section('content')
<h1>Les gerants</h1>
<p>{{ \App\User::all()->count() }}</p>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" ">
        <a href="/users" class="btn btn-primary">Ajouter gerant</a>
      </div>
    </div>
  </div>


@if (count($users)> 0 )
@foreach ($users as $user)
@if(auth::user()->member_in == $user->member_in &&  $user->role == 'Manager')
    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/users/{{$user->id}}"> {{$user->name}} </a></h2>
            <small>Written on {{$user->created_at}} </small>


    </div>
    @endif
@endforeach



@else
<p>no maneger found</p>
@endif

@endsection
