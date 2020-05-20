
@extends('layouts.dashboardAdmin')
@section('content')
<h1>Les Utilisateurs</h1>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" ">
        <a href="/users/create" class="btn btn-primary">Ajouter un utiliasateur</a>
      </div>
    </div>
  </div>


@if (count($users)> 0 )
@foreach ($users as $user)

@if(auth::user()->role =='Admin')

<div class ='card p-3 mt-3 mb-3'>

    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100% " src="/storage/cover_images/{{$user->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">

                <h2 >   <a href="/users/{{$user->id}}"> {{$user->name}} </a></h2>
                <small><span class="txt_bold"> Inscrit le</span> : {{$user->created_at}} </small> <br>
                <small> <span class="txt_bold"> Inscrit à</span> :  {{$user->member_in}} </small><br>
                <small> <span  class="txt_bold"> Role :</span>


                     @if( $user->role =='User')
                    Utilisateur
                @elseif ( $user->role =='Manager')
            Gérant
            @elseif ( $user->role =='Owner')
        Propriétaire
    @else
Administrateur
@endif</small><br>
                <small> <span  class="txt_bold"> Adresse email :</span>  {{$user->email}} </small><br>
                <small> <span class="txt_bold"> téléphone :</span>  {{$user->phone}} </small>




        </div>
    </div>
</div>


@elseif (auth::user()->role == 'Owner' || auth::user()->role == 'Manager' )
@if($user->member_in == auth::user()->member_in)


<div class ='card p-3 mt-3 mb-3'>

    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100% " src="/storage/cover_images/{{$user->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">

                <h2 >   <a href="/users/{{$user->id}}"> {{$user->name}} </a></h2>
                <small><span class="txt_bold"> Inscrit le</span> : {{$user->created_at}} </small> <br>
                <small> <span class="txt_bold"> Inscrit à</span> :  {{$user->member_in}} </small><br>
                <small> <span  class="txt_bold"> Role :</span>


                     @if( $user->role =='User')
                    Utilisateur
                @elseif ( $user->role =='Manager')
            Gérant
            @else
        Propriétaire

@endif</small><br>
                <small> <span  class="txt_bold"> Adresse email :</span>  {{$user->email}} </small><br>
                <small> <span class="txt_bold"> téléphone :</span>  {{$user->phone}} </small>




        </div>
    </div>
</div>
@endif
@endif
@endforeach
{{$users->links()}}


@else
<p>aucun utilisateur</p>
@endif

@endsection
