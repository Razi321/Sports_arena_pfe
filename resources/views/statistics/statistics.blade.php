@extends('layouts.dashboardAdmin')
@section('content')
<div class="container_fluid">

    <p> users :{{ \App\User::all()->count() }}</p>
    <p >members in his gym: {{ App\User::where('member_in', auth::user()->member_in && 'role','User')->count() }}</p>
    <p> gyms : {{ \App\Gym::all()->count() }}</p>
    <p> courses : {{ \App\Course::all()->count() }}</p>
    <p> memberships : {{ \App\Membership::all()->count() }}</p>
    <p> feedbacks: {{ \App\Feedback::all()->count() }}</p>

</div>

@endsection

