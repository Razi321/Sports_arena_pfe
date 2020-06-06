@extends('layouts.dashboardAdmin')
@section('content')
<div class="container_fluid">

    <div class="w3-card container">
        <h4> Nombre d'utilisateurs :{{ \App\User::all()->count() }}</h4>
      </div>



      <div class="w3-card container">
        <h4> salles de sport: {{ \App\Gym::all()->count() }}</h4>
      </div>

      <div class="w3-card container">

        <h4> Nombre des Cours : {{ \App\Course::all()->count() }}</h4>
      </div>

      <div class="w3-card container">
        <h4> Nombre d'abonnements: {{ \App\Membership::all()->count() }}</h4>
      </div>

      <div class="w3-card container">
        <h4> Nombre des avis {{ \App\Feedback::all()->count() }}</h4>
      </div>


</div>

@endsection

