@extends('layouts.app')
@section('content')

<br><br><br>
<div class="row row-no-gutters">
    <div class="col-sm-6"><img style="width:100% ; margin-left: 20px" src="/storage/courses_images/{{$course->image}}"></div>
    <div class="col-sm-6">
        <h5> <span  class="txt_bold"> Nom </span> : {{$course->name}}</h5> <br>

                <h5> <span  class="txt_bold"> Durée</span> : {{$course->duration}}</h5> <br>
                    <h5> <span  class="txt_bold"> Fréquence</span> : {{$course->frequency}}</h5> <br>
                        <h5> <span  class="txt_bold"> Cible </span> : {{$course->target}}</h5> <br>
                            <h5> <span  class="txt_bold"> tenue </span> : {{$course->outfit}}</h5> <br>
                                <h5> <span  class="txt_bold"> prix par mois </span> : {{$course->price_month}}</h5> <br>
                                    <h5> <span  class="txt_bold"> prix par séance </span> : {{$course->price_session}}</h5>
  </div>
<br>



  <h5 style="margin-left: 35px"> <span  class="txt_bold"> Description</span> : {{$course->description}}</h5> <br>








<br><br><br>
  <div class="container-fluid" style="margin-left: 10px">
    <div class="row">
      <div class="col-sm-6" >
        <div class="container">
        <a href="/courses/{{$course->id_course}}/edit" class="btn btn-primary">Modifier le cour</a>
      </div>
    </div>
      <div class="col-sm-6" >
        {!!Form::open(['action'=>['CoursesController@destroy' , $course->id_course] , 'method' =>'POST' ])!!}

        {{Form::hidden('_method' , 'DELETE')}}
        {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}


      </div>
    </div>
    </div>
    </div>




@endsection
