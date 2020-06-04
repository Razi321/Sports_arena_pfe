@extends('layouts.dashboardAdmin')
@section('content')
<div class="container_fluid">

    <div class="w3-card">
        <p> Nombre d'utilisateurs :{{ \App\User::all()->count() }}</p>
      </div>

      <div class="w3-card">
        <p >Nombre des clients {{ App\User::where('member_in', auth::user()->member_in && 'role','User')->count() }}</p>
      </div>

      <div class="w3-card">
        <p> salles de sport: {{ \App\Gym::all()->count() }}</p>
      </div>

      <div class="w3-card">

    <p> Nombre des Course : {{ \App\Course::all()->count() }}</p>
      </div>

      <div class="w3-card">
        <p> Nombre d'abonnements: {{ \App\Membership::all()->count() }}</p>
      </div>

      <div class="w3-card">
        <p> Nombre des avis {{ \App\Feedback::all()->count() }}</p>
      </div>


</div>

@endsection

