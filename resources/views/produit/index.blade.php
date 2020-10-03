@extends('layout.master')
@section('title', 'Produit')
@section('parentPageTitle', 'Produit')
@section('content')
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2> <strong>Produit</strong></h2>

                </div>
                <div class="body">
                    <a href="{{route('produits.create')}}" class="btn btn-primary"><span>Ajouter</span></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>TITRE</th>
                                <th>Date d'ajout</th>
                                <th>ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Produit::all() as $produit)
                                <tr>
                                    <th scope="row">{{$produit->id}}</th>
                                    <td>{{$produit->nom}}</td>
                                    <td>{{$produit->created_at}}</td>
                                    <td><a href="{{route('produits.delete',$produit->id)}}"><span class="badge badge-danger badge-pill">X</span></a></td>
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
