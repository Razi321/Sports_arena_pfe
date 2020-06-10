
    @extends('layouts.dashboardAdmin')
    @section('content')

    <br><br><br>
    <div class="row row-no-gutters">
        <div class="col-sm-12"> <img  width="1380" height="500"  src="/storage/payment_images/{{$payment->payment_image}}"></div>


<div class="container-fluid">
    <h5> <span  class="txt_bold">  envoyer par</span> : {{$payment->owner->name}}</h5> <br>
    <h5> <span  class="txt_bold">  envoyer le</span> : {{$payment->created_at}} </h5> <br> </div>


    <br>

    <br><br><br>
    <div class="container-fluid" style="margin-left: 10px">
        <div class="row">


        <div class="col-sm-6" >
            {!!Form::open(['action' => ['PaymentController@destroy', $payment->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}


        </div>
        </div>
        </div>
        </div>

@endsection

