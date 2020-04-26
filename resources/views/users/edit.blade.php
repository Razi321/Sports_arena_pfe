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
        <td>

            {!! Form::open(['action' => ['UsersController@update' , $user->id] , 'method' => ' Post']) !!}


            <div class ='form-group'>
                {{ Form::select('role', ['Owner' => 'Owner','Admin' => 'Admin', 'Manager' => 'Manager' , 'User' => 'User'] , null, ['placeholder' => 'Choisir le role'])}}


            </div>

            {{Form::hidden('_method' , 'PUT')}}
            {{Form::submit('Enregister' , ['class'=> 'btn btn-success'])}}
            {!! Form::close() !!}


        </td>
      </tr>
    </tbody>
  </table>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" ">
        <a href="/users/{{$user->id}}" class="btn btn-primary">Retour</a>
      </div>


@endsection
