
@foreach($feedback as $feedback)
@if($gym->id == $feedback->belongs_to)
    <div class="row">
      <div class="col-sm-8" >
        <img src="/storage/cover_images/{{auth::user()->cover_image}}"  style="width:32px; height:32px; position:absolute; top:10px; border-radius:50%">
        <p style="font-weight: bold; margin-left:35px">{{$feedback->body}}</p>
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

@endif
    @endforeach

