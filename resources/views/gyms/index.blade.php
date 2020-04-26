


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

{{--admin view--}}
@if (Auth::User()->role == 'Admin')
    <div class ='card p-3 mt-3 mb-3'>

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style="width:100% " src="/storage/cover_images/{{$gym->cover_image}}">
            </div>
            <div class="col-md-8 col-sm-8">
                <h2 >   <a href="/gyms/{{$gym->id}}"> {{$gym->name}} </a></h2>
            <h5>prix par mois : {{$gym->price_month}}</h5>
            <small>Written on {{$gym->created_at}} </small>
            </div>
        </div>
    </div>

{{--end admin view--}}
    @else

{{--owner view--}}
    @if (Auth::User()->id == $gym->owner )
    <div class ='card p-3 mt-3 mb-3'>

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style="width:50%" src="/storage/cover_images/{{$gym->cover_image}}">
            </div>
            <div class="col-md-4 col-sm-4">
                <h2 >   <a href="/gyms/{{$gym->id}}"> {{$gym->name}} </a></h2>
            <small>Written on {{$gym->created_at}} </small>
            </div>
        </div>
    </div>
    @endif
{{-- end owner view--}}
    @endif
@endforeach






















{{$gyms->links()}}

@else
<p>pas de salle de sport encore</p>
@endif

@endsection










