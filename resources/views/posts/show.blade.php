@extends('layouts.app')
@section('content')
<br><br>
 &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
<video  controls   class="text-center ">
    <source src="/storage/videos/{{$post->video}}" type="video/mp4">
  Your browser does not support the video tag.
  </video>

<br> <br><br>
  <h5 style="margin-left: 35px"> <span  class="txt_bold"> Description</span> : {{$post->body}}</h5> <br>




  <small><span class="txt_bold" style="margin-left: 35px" > ajouté par </span> : {{$post->gymadmin->name}} </small> <br>
  <small><span class="txt_bold" style="margin-left: 35px">Ecrit le </span> : {{$post->created_at}} </small> <br>









<br>

<div style="margin-left: 35px">
      {!!Form::open(['action'=>['PostsController@destroy' , $post->id] , 'method' =>'POST' ])!!}
    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
</div>

</div>
@endsection
