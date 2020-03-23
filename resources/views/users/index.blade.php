@extends('layouts.dashboardAdmin')
@section('content')
<h1>users</h1>
@if (count($users)> 0 )
@foreach ($users as $user)

    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/users/{{$user->id}}"> {{$user->name}} </a></h2>
            <small>Written on {{$user->created_at}} </small>




    </div>
@endforeach
{{$users->links()}}


@else
<p>no post found</p>
@endif
@endsection
