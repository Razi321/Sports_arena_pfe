@extends('layouts.dashboardAdmin')
@section('content')
<h1>Les abonnements</h1>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" ">
        <a href="/users" class="btn btn-primary">Ajouter modifier</a>
      </div>
    </div>
  </div>


@if (count($membership)> 0 )
@foreach ($membership as $membership)

    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/memberships/{{$membership->id}}"> identifiant {{$membership->id}} </a></h2>
            <small>nom du member : {{$membership->userMember->name}} </small>

            @if ($membership->updated_at->isToday() )
            <small class="fin">fin abonnement</small>

            @endif

    </div>
@endforeach
{{$users->links()}}


@else
<p>no post membership</p>
@endif

@endsection
