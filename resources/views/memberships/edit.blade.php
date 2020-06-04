@extends('layouts.dashboardAdmin')
@section('content')
<br>


            {!! Form::open(['action' => ['MembershipsController@update' , $membership->id] , 'method' => ' Post']) !!}


            <div class ='form-group'>
                {{Form::label('course_id' , 'Identifiant du cour')}}
                {{Form::text('course_id' , $membership->course_id, ['class' => 'form-control' ])}}
            </div>
            <div class ='form-group'>
                {{Form::label('end_at' , "date d'expiration")}}
                {{Form::text('end_at' , $membership->end_at, ['class' => 'form-control'])}}
            </div>



            {{Form::hidden('_method' , 'PUT')}}
            {{Form::submit('submit' , ['class'=> 'btn btn-success'])}}
            {!! Form::close() !!}




@endsection
