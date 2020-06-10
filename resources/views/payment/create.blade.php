@extends('layouts.app')
@section('content')


    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Payement ') }}</div>

                        <div class="card-body">


                                {!!Form::open(['action' => 'PaymentController@store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}

                                <div class="form-group">
                                    &nbsp; &nbsp;  &nbsp; &nbsp;
                                    {{Form::label('payment_image' , 'votre extrait de payment' , ['class'=> 'txt_bold'])}}
&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                                    {{Form::file('payment_image' )}}
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        {{Form::submit('Enregistrer' , ['class'=> 'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>




@endsection
