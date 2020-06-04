@extends('layouts.dashboardAdmin')
@section('content')
<h1>Les cours</h1>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/courses/create" class="btn btn-primary">Ajouter cour</a>
      </div>
    </div>
  </div>


@if (count($courses)> 0 )
@foreach ($courses as $course)

    <div class ='card p-3 mt-3 mb-3'>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100% " src="/storage/courses_images/{{$course->image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h2 >   <a href="/courses/{{$course->id_course}}"> {{$course->name}} </a></h2>
                    <small> <span  class="txt_bold"> Créé le </span> : {{$course->created_at}}</small> <br>
                    <small> <span  class="txt_bold"> prix par mois </span> : {{$course->price_month}}</small> <br>
                    <small> <span  class="txt_bold"> prix par séance </span> : {{$course->price_session}}</small>

                </div>
            </div>




    </div>
@endforeach
{{$courses->links()}}


@else
<p>aucun cour</p>
@endif

@endsection
