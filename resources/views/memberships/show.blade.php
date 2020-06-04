
@extends('layouts.dashboardAdmin')
@section('content')
 <br><br>
<div class="container">
 <small> <span class="txt_bold"> identifiant de l'abonnement</span> :  {{$membership->id}}  </small><br>
                <small> <span  class="txt_bold">  Nom de membre </span>: {{$membership->userMember->name}} </small> <br>
                <small> <span  class="txt_bold">Modifié le  </span> : {{$membership->updated_at}}</small>

</div>


<br>
    {!!Form::open(['action'=>['MembershipsController@destroy' ,$membership->id] , 'method' =>'POST' ])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

 <br>
<a href="/memberships/{{$membership->id}}/edit" class="btn btn-dark">Modifier abonnement</a>
@endsection

