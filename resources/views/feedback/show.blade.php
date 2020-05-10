
@foreach($feedback as $feedback)
    <div class="row">
      <div class="col-sm-8" >
        <p style="font-weight: bold;">{{$feedback->body}}</p>
        <small> Ecrit le {{$feedback->created_at}} par
            {{ $feedback->usersfeed->name }}



        </small>
      </div>
      <div class="col-sm-4" >
        <p> @if(Auth::user()->id == $feedback->user_id)
            {!!Form::open(['action' => ['FeedbacksController@destroy', $feedback->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                 {{Form::hidden('_method', 'DELETE')}}
                 {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
             {!!Form::close()!!}
             @endif
            </p>

      </div>
    </div>
<hr>


    @endforeach

