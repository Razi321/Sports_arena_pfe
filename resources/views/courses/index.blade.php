@extends('layouts.dashboardAdmin')
@section('content')
<h1>Les cours</h1>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" ">
        <a href="/courses/create" class="btn btn-primary">Ajouter cour</a>
      </div>
    </div>
  </div>


@if (count($courses)> 0 )
@foreach ($courses as $course)

    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/courses/{{$course->id_course}}"> {{$course->name}} </a></h2>
            <small>Written on {{$course->created_at}} </small>




    </div>
@endforeach
{{$courses->links()}}


@else
<p>aucun cour</p>
@endif

@endsection
