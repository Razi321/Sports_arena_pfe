


@extends('layouts.dashboardAdmin')
@section('content')
<h1>feedbackq</h1>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/users/create" class="btn btn-primary">Ajouter utiliasateur</a>
      </div>
    </div>
  </div>


  @if(count($feedbacks) > 0)
  @foreach($feedbacks as $feedback)

    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/gyms/{{$feedback->belongs_to}}">{{$feedback->body}}</a></h2>
            <small>Written on {{$feedback->created_at}} </small>




    </div>
@endforeach
{{$feedbacks->links()}}


@else
<p>no feedbacks found</p>
@endif

@endsection

