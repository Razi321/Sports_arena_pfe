@extends('layouts.dashboardAdmin')
@section('content')
<h1>ajouter salle de sport </h1>
    {!!Form::open(['action' => 'GymController@store' , 'method' => 'POST' ]) !!}
<div class ='form-group'>
        {{Form::label('name' , 'name')}}
        {{Form::text('name' , null , ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('adress' , 'adress')}}
        {{ Form::text('adress' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('month_price' , 'month_price')}}
        {{Form::text('month_price' , null , ['class' => 'form-control'])}}
    </div>

    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
