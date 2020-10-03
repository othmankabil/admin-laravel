@extends('layout.master')
@section('title', 'Modifier Produit')
@section('parentPageTitle', 'Produit')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Modifier</strong> Offre</h2>

                </div>
                <div class="body">
                    <form id="form_validation" method="POST">
                        <div class="form-group form-float col-md-12">
                            <h2 class="card-inside-title">Titre</h2>
                            <input type="text" class="form-control" placeholder="titre" name="last_name" required>
                        </div>
                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
