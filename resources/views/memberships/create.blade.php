
<h1>Ajouter abonnement</h1>
    {!!Form::open(['action' => 'MembershipsController@store' , 'method' => 'POST' ]) !!}




    <div class ='form-group'>
    {{Form::label('course_id' , 'Identifiant du cour')}}
 {{Form::text('course_id' ,null, ['class' => 'form-control' ])}}
        </div>



    <div class ='form-group'>
       {{Form::label('end_at' , "date d'expiration")}}
            {{Form::text('end_at' ,null, ['class' => 'form-control' , 'placeholder' => 'AAAA/MM/JJ'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('user_id' , "Identifiant d'utilisateur")}}

            {{Form::text('user_id' , $user->id, ['class' => 'form-control' , 'placeholder' => 'name'])}}
        </div>



    {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}



