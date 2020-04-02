


@extends('layouts.dashboardAdmin')
@section('content')
<h1>Nos salles de sport</h1>
@if (Auth::User()->role == 'Admin' || Auth::User()->role == 'Owner')
<div class="container-fluid">

    <div class="row">
      <div class="col-sm-12" ">
        <a href="/gyms/create" class="btn btn-primary">Ajouter salle de sport</a>
      </div>
    </div>
  </div>
@endif

@if (count($gyms)> 0 )
@foreach ($gyms as $gym)
@if (Auth::User()->role == 'Admin')
    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/gyms/{{$gym->id}}"> {{$gym->name}} </a></h2>
            <small>Written on {{$gym->created_at}} </small>
    </div>
    @else
    @if (Auth::User()->id == $gym->owner )
    <div class ='card p-3 mt-3 mb-3'>
        <h2 >   <a href="/gyms/{{$gym->id}}"> {{$gym->name}} </a></h2>
        <small>Written on {{$gym->created_at}} </small>
 </div>
    @endif
    @endif
@endforeach






















{{$gyms->links()}}

@else
<p>pas de salle de sport encore</p>
@endif

@endsection










