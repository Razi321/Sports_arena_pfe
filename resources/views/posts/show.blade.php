@extends('layouts.app')
@section('content')


<video width="320" height="240" controls>
    <source src="/storage/videos/{{$post->video}}" type="video/mp4">
  Your browser does not support the video tag.
  </video>




    {!!Form::open(['action'=>['PostsController@destroy' , $post->id] , 'method' =>'POST' ])!!}

    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
</div>
@endsection
