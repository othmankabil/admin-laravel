@extends('layout.master')
@section('title', 'Ajouter Utilisateur')
@section('parentPageTitle', 'Utilisateur')
@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Ajouter</strong> Utilisateur</h2>

                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="{{route('users.store')}}">
                        @csrf
                        <div class="row">
                           <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Nom</h2>
                                <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                           </div>
                            <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Prénom</h2>
                                <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Login</h2>
                                <input type="text" class="form-control" placeholder="Login" name="login" required>
                            </div>
                            <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Mot de passe</h2>
                                <input type="text" class="form-control" placeholder="Mot de passe" name="password" required>
                            </div>
                        </div>
                         <div class="form-group form-float">
                              <select name="role" class="form-control show-tick" required>
                                    <option value="utilisateur">Utilisateur</option>
                                    <option value="admin">Administrateur</option>
                              </select>
                         </div>


                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
