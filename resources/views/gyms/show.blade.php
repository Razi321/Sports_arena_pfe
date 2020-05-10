@extends('layouts.app')
@section('content')
<img style="width:100% " src="/storage/cover_images/{{$gym->cover_image}}">





    <div class="row">
        <div class="col-md-4 col-sm-4 ">
            <div class="card gymcard">
                <div class="card-header">Information</div>

                <div class="card-body">

                     {{--home info--}}
                 <div>
                    <i  class="fa fa-home"  style="font-size:30px">  : </i>
                </div>
                {{-- end home info--}}
<hr>
                   {{--phone num --}}
                 <div>
                    <i class="fa fa-phone-square"style="font-size:30px"> : </i>
                </div>
                {{-- end phone nim --}}

                <hr>
                 {{--instagram link--}}
                 <div>
                    <i class="fa fa-instagram" style="font-size:30px"> : </i>
                    <a href="https://www.instagram.com/razimelliti/?hl=fr"></a>
                </div>
                {{-- end instagram link--}}
                <hr>
                {{--facebook link--}}
                <div>
                    <i class="fa fa-facebook-square" style="font-size:30px"> : </i>
                    <a href="https://www.facebook.com/rmelliti/"></a>
                </div>
                {{-- end facebook link--}}
                </div>
            </div>
        </div>




        <div class="col-md-8 col-sm-8">
            <div class="card gymcard">
                <div class="card-header"> à propos de nous</div>

                <div class="card-body">

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



{{--owner view--}}

@if(Auth::user()->id == $gym->owner)
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" >
        <a href="/gyms/{{$gym->id}}/edit" class="btn btn-primary">Modifier le role</a>
      </div>
      <div class="col-sm-6" >
{!!Form::open(['action'=>['UsersController@destroy' , $gym->id] , 'method' =>'POST' ])!!}


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

<div >
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
</div>
</div>
@endsection
