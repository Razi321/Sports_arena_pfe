@extends('layouts.dashboardAdmin')
@section('content')
<br>

            {!! Form::open(['action' => ['GymController@update' , $gym->id] , 'method' => ' Post']) !!}
            <div class ='form-group'>
                {{Form::label('name' , 'Nom du salle de sport')}}
                {{Form::text('name' ,$gym->name , ['class' => 'form-control'] )}}
            </div>


            <div class ='form-group'>
               {{Form::label('adress' , 'Adresse')}}
                {{ Form::text('adress' ,  $gym->adress , ['class' => 'form-control'])}}
            </div>
            <div class ='form-group'>
                {{Form::label('fb' , 'lien du compte facebook')}}
                {{Form::text('fb' ,  $gym->fb , ['class' => 'form-control'])}}
            </div>

            <div class ='form-group'>
                {{Form::label('insta' , 'lien du compte instagram')}}
                {{Form::text('insta' ,  $gym->insta , ['class' => 'form-control'])}}
            </div>

            <div class ='form-group'>
                {{Form::label('phone_number' , 'numéro de téléphone')}}
                {{Form::text('phone_number' , $gym->phone_number , ['class' => 'form-control'])}}
            </div>

            <div class ='form-group'>
                {{Form::label('description' , 'description')}}
                {{Form::textarea('description' ,  $gym->description , ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('cover_image' , 'photo de couverture')}}
                <br>
                {{Form::file('cover_image' )}}
            </div>

            <div class="container-fluid">
            {{Form::hidden('_method' , 'PUT')}}
            {{Form::submit('submit' , ['class'=> 'btn btn-success'])}}
            {!! Form::close() !!}
            </div>
            <br>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" >
        <a href="/gyms/{{$gym->id}}" class="btn btn-primary">Retour</a>
      </div>


@endsection
