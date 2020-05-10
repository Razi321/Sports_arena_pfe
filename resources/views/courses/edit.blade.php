@extends('layouts.dashboardAdmin')
@section('content')
<h1>modifier cour</h1>
{!! Form::open(['action' => ['CoursesController@update' , $course->id_course] , 'method' => ' Post']) !!}

<div class ='form-group'>
        {{Form::label('name' , 'Nom')}}
        {{Form::text('name' , $course->name, ['class' => 'form-control'] )}}
    </div>




    <div class ='form-group'>
       {{Form::label('description' , 'Description')}}
        {{ Form::textarea('description' , $course->description, ['class' => 'form-control'])}}
    </div>

    <div class ='form-group'>
        {{Form::label('duration' , 'Duration')}}
        {{Form::text('duration' , $course->duration ,['class' => 'form-control']) }}
    </div>

    <div class ='form-group'>
        {{Form::label('frequency' , 'Frequence')}}
         {{ Form::textarea('frequency' , $course->frequency, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('target' , 'Cible')}}
         {{ Form::textarea('target' , $course->target, ['class' => 'form-control'])}}
     </div>
     <div class ='form-group'>
        {{Form::label('outfit' , 'tenue')}}
         {{ Form::textarea('outfit' , $course->outfit, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price_month' , 'Prix par mois')}}
         {{ Form::textarea('price_month' , $course->price_month, ['class' => 'form-control'])}}
     </div>

     <div class ='form-group'>
        {{Form::label('price_session' , 'Prix par séance')}}
         {{ Form::textarea('price_session' , $course->price_session, ['class' => 'form-control'])}}
     </div>

     <div class="form-group">
        {{Form::label('image' , 'photo')}}
        <br>
        {{Form::file('image' )}}
    </div>



    {{Form::hidden('_method' , 'PUT')}}
    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
