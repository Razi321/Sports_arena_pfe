@extends('layouts.dashboardAdmin')
@section('content')





<small>nom du member : {{$membership->id}} </small>

    {!!Form::open(['action'=>['MembershipsController@destroy' ,$membership->id] , 'method' =>'POST' ])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}


<a href="/memberships/{{$membership->id}}/edit" class="btn btn-dark">Edit profile</a>
@endsection
