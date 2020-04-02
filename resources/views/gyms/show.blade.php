@extends('layouts.app')
@section('content')
<h1> les information du salle </h1>
<h3>{{$gym->adress}}</h3>
<h3>{{$gym->name}}</h3>
<h3>{{$gym->owner}}</h3>
@if(Auth::user()->id == $gym->owner)
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" ">
        <a href="/gyms/{{$gym->id}}/edit" class="btn btn-primary">Modifier le role</a>
      </div>
      <div class="col-sm-6" >
{!!Form::open(['action'=>['UsersController@destroy' , $gym->id] , 'method' =>'POST' ])!!}


{{Form::hidden('_method' , 'DELETE')}}
{{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}


      </div>
    </div>
  </div>
@endif
@endsection
