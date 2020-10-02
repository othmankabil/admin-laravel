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
                    <a href="{{route('offres.create')}}" class="btn btn-primary"><span>Ajouter</span></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>TITRE</th>
                                <th>DATE</th>
                                <th>UTILISATEUR</th>
                                <th>Prix</th>
                                <th>Actions</th>
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
