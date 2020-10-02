@extends('layout.master')
@section('title', 'Utilisateur')
@section('parentPageTitle', 'Utilisateur')
@section('content')
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2> <strong>Utilisateur</strong></h2>

                </div>
                <div class="body">
                    <a href="{{route('users.create')}}" class="btn btn-primary"><span>Ajouter</span></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>LOGIN</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\User::all() as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->nom}}</td>
                                <td>{{$user->prenom}}</td>
                                <td>{{$user->login}}</td>
                                <td><a href="{{route('users.delete',$user->id)}}"><span class="badge badge-danger badge-pill">x</span></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
