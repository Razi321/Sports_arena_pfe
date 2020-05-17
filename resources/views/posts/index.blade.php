@extends('layouts.app')
@section('content')
<h1>blog</h1>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12" ">
        <a href="/posts/create" class="btn btn-primary">Ajouter article</a>
      </div>
    </div>
  </div>


@if (count($post)> 0 )
@foreach ($post as $post)

    <div class ='card p-3 mt-3 mb-3'>
            <h2 >   <a href="/posts/{{$post->id}}"> {{$post->title}} </a></h2>
            <small>Written on {{$post->created_at}} </small>


    </div>
@endforeach



@else
<p>no post found</p>
@endif

@endsection
