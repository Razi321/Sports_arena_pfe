@extends('layouts.app')
@section('content')
<div>
    <img class="gymimg" width="1380" height="500"  src="/storage/cover_images/{{$gym->cover_image}}">
</div>
<br>

 <div style="text-align: center ; font-size:80px; font-family: Times New Roman">
    <h1>{{$gym->name}}</h1>

</div>
<br>
    <div class="row">
        <div class="col-md-4 col-sm-4 ">
            <div class="card gymcard">
                <div class="card-header">Information</div>

                <div class="card-body">

                     {{--home info--}}
                 <div>
                    <i  class="fa fa-home"  style="font-size:30px">  : {{$gym->adress}} </i>

                </div>
                {{-- end home info--}}
<hr>
                   {{--phone num --}}
                 <div>
                    <i class="fa fa-phone-square"style="font-size:30px"> :{{$gym->phone_number}} </i>

                </div>
                {{-- end phone nim --}}

                <hr>
                 {{--instagram link--}}
                 <div>
                    <i class="fa fa-instagram" style="font-size:30px"> : </i>
                    <a href="{{$gym->insta}}">Cliquer ici</a>
                </div>
                {{-- end instagram link--}}
                <hr>
                {{--facebook link--}}
                <div>
                    <i class="fa fa-facebook-square" style="font-size:30px"> : </i>
                    <a href="{{$gym->fb}}">Cliquez ici</a>
                </div>
                {{-- end facebook link--}}
                </div>
            </div>
        </div>




        <div class="col-md-8 col-sm-8">
        <div class="card gymcard" style="height : 318px">
                <div class="card-header">
                     à propos de nous

                </div>

                <div class="card-body">

                    <p>{{$gym->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div >
    <div class="card gymcard">
        <div class="card-header">Information</div>

        <div class="card-body">
           hghghghg
        </div>
    </div>
</div>
</div>





    <div class="card gymcard">
        <div class="card-header">feedbacks</div>

        <div class="card-body">
            @if(Auth::user()->member_in == $gym->id)
            @include('feedback.create')
            @endif
            <br>
            @include('feedback.show')
        </div>
    </div>

{{--owner view--}}

@if(Auth::user()->id == $gym->owner)
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" >
        <a href="/gyms/{{$gym->id}}/edit" class="btn btn-primary">Modifier</a>
      </div>
      <div class="col-sm-6" >
{!!Form::open(['action'=>['GymController@destroy' , $gym->id] , 'method' =>'POST' ])!!}


{{Form::hidden('_method' , 'DELETE')}}
{{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}


      </div>
    </div>
  </div>
  {{-- end owner view--}}
@else

{{-- admin view--}}

@if(Auth::user()->role =='Admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6" >
{!!Form::open(['action'=>['GymController@destroy' , $gym->id] , 'method' =>'POST' ])!!}
{{Form::hidden('_method' , 'DELETE')}}
{{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}

        </div>

</div>
  </div>
{{--end admin view--}}
@endif
@endif

@endsection
