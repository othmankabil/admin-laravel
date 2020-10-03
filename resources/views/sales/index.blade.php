@extends('layout.master')
@section('title', 'Offres')
@section('parentPageTitle', 'Offres')
@section('content')
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2> <strong>Offres</strong></h2>

                </div>
                <div class="body">
                    <a href="{{route('sales.create')}}" class="btn btn-primary"><span>Ajouter</span></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>TITRE</th>
                                <th>PRIX</th>
                                <th>UTILISATEUR</th>
                                <th>DATE</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\sale::all() as $sale)
                                <tr>
                                    <th scope="row">{{$sale->id}}</th>
                                    <td>{{\App\Produit::find($sale->produit_id)->nom}}</td>
                                    <td>{{$sale->prix}}</td>
                                    <td>{{\App\User::find($sale->user_id)->nom}}</td>
                                    <td>{{$sale->created_at}}</td>
                                    <td><a href="{{route('sales.delete',$sale->id)}}"><span class="badge badge-danger badge-pill">X</span></a></td>
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
