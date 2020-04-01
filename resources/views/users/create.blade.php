@extends('layouts.dashboardAdmin')
@section('content')
<h1>Create post</h1>
    {!!Form::open(['action' => 'UsersController@store' , 'method' => 'POST' ]) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Name')}}
        {{Form::text('name' , '', ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('email' , 'email')}}
        {{ Form::text('email' , '', ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('password' , 'password')}}
        {{Form::password('password' , ['class' => 'form-control']) ,csrf_field() }}
    </div>

    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
