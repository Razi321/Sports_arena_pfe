@extends('layouts.app')
@section('content')
<img style="width:100% " src="/storage/courses_images/{{$course->image}}">

<br><br>
<a href="/courses/{{$course->id_course}}/edit" class="btn btn-primary">Modifier le cour</a>
<p>{{$course->name}}</p>
<div class="bg-light p-4 d-flex justify-content-end text-center">
    {!!Form::open(['action'=>['CoursesController@destroy' , $course->id_course] , 'method' =>'POST' ])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
</div>
@endsection
