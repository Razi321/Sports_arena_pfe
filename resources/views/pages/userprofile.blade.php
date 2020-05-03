@extends('layouts.app')
@section('content')


        <!-- Profile widget -->
        <div class="bg-white shadow  overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3"><img src="/storage/cover_images/{{auth::user()->cover_image}}"  alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="/users/{{auth::user()->id}}/edit" class="btn btn-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
                    <h4 class="mt-0 mb-0">{{auth::user()->name}}</h4>
                        <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i>San Farcisco</p>
                    </div>
                </div>
            </div>

            <div class="bg-light p-4 d-flex justify-content-end text-center">
                {!!Form::open(['action'=>['UsersController@destroy' , auth::user()->id] , 'method' =>'POST' ])!!}

                {{Form::hidden('_method' , 'DELETE')}}
                {{Form::submit('Supprimer' , ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>

            <div class="container-fluid">
                <br>
                <h2 class="text-center">Information général</h2>
                <br>


                <table class="table table-striped table-bordered ">
                    <thead>
                      <tr>
                        <td  class="tabspec">Nom</td>
                        <td>{{auth::user()->name}}</td>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tabspec" >Adresse email</td>
                        <td>{{auth::user()->email}}</td>

                      </tr>
                      <tr>
                        <td class="tabspec">Sexe</td>
                        <td>homme</td>

                      </tr>
                      <tr>
                        <td class="tabspec" >Date de naissance </td>
                        <td>15/02/1998</td>

                      </tr>
                      <tr>
                        <td class="tabspec">Adresse</td>
                        <td>tunis</td>

                      </tr>
                      <tr>
                        <td class="tabspec">Role</td>
                        <td >{{auth::user()->role}}</td>

                      </tr>
                    </tbody>
                  </table>
            </div>

@endsection
