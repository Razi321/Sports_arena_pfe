@extends('layouts.dashboardAdmin')
@section('content')
<h1>Articles</h1>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" >
        <a href="/posts/create" class="btn btn-primary">Ajouter article</a>
      </div>
    </div>
  </div>


@if (count($posts)> 0 )
@foreach ($posts as $post)


    <div class ='card p-3 mt-3 mb-3'>


            <h2 >   <a href="/posts/{{$post->id}}"> {{$post->title}} </a></h2>
            <small> <span class="txt_bold">Description :</span>  {{$post->body}} </small>
            <small>  <span class="txt_bold">Ajouté le :</span>  {{$post->created_at}} </small>
            <h5>   <a href="/posts/{{$post->id}}"> Voir plus </a></h5>
    </div>

@endforeach



{{$posts->links()}}
@else
<p>aucun cour</p>
@endif

@endsection
