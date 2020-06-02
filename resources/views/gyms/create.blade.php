@extends('layouts.dashboardAdmin')
@section('content')
<h1>ajouter salle de sport </h1>
    {!!Form::open(['action' => 'GymController@store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Nom du salle de sport')}}
        {{Form::text('name' , null , ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('adress' , 'Adresse')}}
        {{ Form::text('adress' ,  null , ['class' => 'form-control'])}}
    </div>
    <div class ='form-group'>
        {{Form::label('fb' , 'lien du compte facebook')}}
        {{Form::text('fb' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('insta' , 'lien du compte instagram')}}
        {{Form::text('insta' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('phone_number' , 'numéro de téléphone')}}
        {{Form::text('phone_number' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('description' , 'description')}}
        {{Form::textarea('description' ,  null , ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('cover_image' , 'photo de couverture')}}
        <br>
        {{Form::file('cover_image' )}}
    </div>

    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
