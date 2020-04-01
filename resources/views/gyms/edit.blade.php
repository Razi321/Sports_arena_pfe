@extends('layouts.dashboardAdmin')
@section('content')
<br>


            {!! Form::open(['action' => ['GymController@update' , $gym->id] , 'method' => ' Post']) !!}




            <div class ='form-group'>
                {{Form::label('name' , 'name')}}
                {{Form::text('name' , $gym->name, ['class' => 'form-control' , 'placeholder' => 'name'])}}
            </div>
            <div class ='form-group'>
                {{Form::label('adress' , 'adress')}}
                {{Form::text('adress' , $gym->adress, ['class' => 'form-control' , 'placeholder' => 'adress'])}}
            </div>
            <div class ='form-group'>
                {{Form::label('owner' , 'owner')}}
                {{Form::text('owner' , $gym->owner, ['class' => 'form-control' , 'placeholder' => 'owner'])}}
            </div>
            <div class ='form-group'>
                {{Form::label('price_month' , 'price_month')}}
                {{Form::text('price_month' , $gym->price_month, ['class' => 'form-control' , 'placeholder' => 'price_month'])}}
            </div>


           <div class ='form-group'>
                {{ Form::select('manager', ['Admin' => 'Admin', 'Manager' => 'Manager' , 'User' => 'User'] , null, ['placeholder' => 'Choisir le role'])}}

            </div>

            {{Form::hidden('_method' , 'PUT')}}
            {{Form::submit('submit' , ['class'=> 'btn btn-success'])}}
            {!! Form::close() !!}




  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" ">
        <a href="/gyms/{{$gym->id}}" class="btn btn-primary">Retour</a>
      </div>


@endsection
