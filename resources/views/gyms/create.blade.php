@extends('layouts.dashboardAdmin')
@section('content')
<h1>ajouter salle de sport </h1>
    {!!Form::open(['action' => 'GymController@store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
<div class ='form-group'>
        {{Form::label('name' , 'name')}}
        {{Form::text('name' , null , ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('adress' , 'adress')}}
        {{ Form::text('adress' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('price_month' , 'price_month')}}
        {{Form::text('price_month' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('cover_image' , 'photo de couverture')}}
        <br>
        {{Form::file('cover_image' )}}
    </div>

    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
