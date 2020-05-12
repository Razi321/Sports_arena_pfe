
<h1>ajouter abonnement</h1>
    {!!Form::open(['action' => 'MembershipsController@store' , 'method' => 'POST' ]) !!}

  <small>

        @foreach ($course as $course)
  <p>cour : {{$course->name}} et identifiant : {{$course->id_course}}</p>
        @endforeach

  </small>



    <div class ='form-group'>
    {{Form::label('course_id' , 'cour')}}
 {{Form::text('course_id' ,null, ['class' => 'form-control' ])}}
        </div>



    <div class ='form-group'>
       {{Form::label('end_at' , 'fin abonnement')}}
            {{Form::text('end_at' ,null, ['class' => 'form-control' , 'placeholder' => 'AAAA/MM/JJ'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('user_id' , 'id')}}

            {{Form::text('user_id' , $user->id, ['class' => 'form-control' , 'placeholder' => 'name'])}}
        </div>



    {{Form::submit('submit' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}



