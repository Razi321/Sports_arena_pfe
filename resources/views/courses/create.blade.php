@extends('layouts.dashboardAdmin')
@section('content')
<h1>ajouter cour</h1>
    {!!Form::open(['action' => 'CoursesController@store' , 'method' => 'POST'  , 'enctype' => 'multipart/form-data' ]) !!}
<div class ='form-group'>
        {{Form::label('name' , 'Nom')}}
        {{Form::text('name' , null, ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('description' , 'Description')}}
        {{ Form::textarea('description' , null, ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('duration' , 'durée')}}
        {{Form::text('duration' , null, ['class' => 'form-control']) }}
    </div>

    <div class ='form-group'>
        {{Form::label('frequency' , 'Frequence')}}
         {{ Form::text('frequency' , null, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('target' , 'Cible')}}
         {{ Form::text('target' , null, ['class' => 'form-control'])}}
     </div>
     <div class ='form-group'>
        {{Form::label('outfit' , 'tenue')}}
         {{ Form::text('outfit' , null, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price_month' , 'Prix par mois')}}
         {{ Form::text('price_month' , null, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price_session' , 'Prix par séance')}}
         {{ Form::text('price_session' , null, ['class' => 'form-control'])}}
     </div>

     <div class="form-group">
        {{Form::label('image' , 'photo')}}
        <br>
        {{Form::file('image' )}}
    </div>




    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
