
    <h1>Ajouter un avis</h1>
    {!! Form::open(['action' => 'FeedbacksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::text('body', '', [ 'class' => 'form-control'])}}
        </div>
        {{Form::submit('Enregistrer', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}


