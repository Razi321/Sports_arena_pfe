@extends('layouts.dashboardAdmin')
@section('content')
<br>
<table class="table table-bordered">

    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Adresse email</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
      </tr>
    </tbody>
  </table>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" ">
        <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Modifier le role</a>
      </div>
      <div class="col-sm-6" >
{!!Form::open(['action'=>['UsersController@destroy' , $user->id] , 'method' =>'POST' ])!!}


{{Form::hidden('_method' , 'DELETE')}}
{{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}


      </div>
    </div>
  </div>

@endsection
