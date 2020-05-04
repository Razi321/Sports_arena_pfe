

    <a href="/feedback/create"><button >ajouter feedback</button></a>
    <h1>feedbacks</h1>
    @if(count($feedbacks) > 0)
        @foreach($feedbacks as $feedback)

                <div class="row">
                    <p>{{$feedback->body}}</p>
                    <small>
                        <h2 >   <a href="/feedback/{{$feedback->id}}"> {{$feedback->user_id}}</a></h2>

                    </small>
                </div>
    <hr>

        @endforeach
        {{$feedbacks->links()}}
    @else
        <p>No feedbacks</p>
    @endif



