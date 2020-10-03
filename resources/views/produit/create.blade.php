@extends('layout.master')
@section('title', 'Ajouter Produit')
@section('parentPageTitle', 'Produit')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Ajouter un Produit </strong></h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="{{route('produits.store')}}">
                        @csrf
                        <div class="form-group form-float col-md-12">
                            <h2 class="card-inside-title">Titre</h2>
                            <input type="text" class="form-control" placeholder="titre" name="nom" required>
                        </div>
                        <button class="btn btn-raised btn-primary waves-effect" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
