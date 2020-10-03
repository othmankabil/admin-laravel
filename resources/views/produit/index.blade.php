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
                    <a href="{{route('produit.create')}}" class="btn btn-primary"><span>Ajouter</span></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>TITRE</th>
                                <th>ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
