@extends('layouts.dashboardAdmin')
@section('content')
<h1>Les extraits de payment</h1>
@if(count($payments) > 0)
@foreach($payments as $payment)

<div class ='card p-3 mt-3 mb-3'>

           <h2 > <a href="/payment/{{$payment->id}}"> Voir plus</a></h2> <br>

            <small><span class="txt_bold"> envoyer par </span> : {{$payment->owner->name}} </small> <br>
            <small><span class="txt_bold"> envoyer le </span> : {{$payment->created_at}} </small> <br>
        </div>

@endforeach
{{$payments->links()}}
@else
<p>aucun extrait de payment</p>
@endif
    @endsection
