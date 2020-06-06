@extends('layouts.dashboardAdmin')
@section('content')
<h1>Ajouter un article</h1>
    {!!Form::open(['action' => 'PostsController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
<div class ='form-group'>
        {{Form::label('title' , 'titre *')}}
        {{Form::text('title' , null, ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('body' , 'description *')}}
        {{ Form::textarea('body' , null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('video' , 'video *')}}
        <br>
        {{Form::file('video' )}}
    </div>
<p>* obligatoire</p>
    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
