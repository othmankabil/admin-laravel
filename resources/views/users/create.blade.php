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
                    <form id="form_validation" method="POST">
                        <div class="row">
                           <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Nom</h2>
                                <input type="text" class="form-control" placeholder="Nom" name="last_name" required>
                           </div>
                            <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Prénom</h2>
                                <input type="text" class="form-control" placeholder="Prénom" name="first_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Login</h2>
                                <input type="text" class="form-control" placeholder="Login" name="Login" required>
                            </div>
                            <div class="form-group form-float col-md-6">
                                <h2 class="card-inside-title">Mot de passe</h2>
                                <input type="text" class="form-control" placeholder="Mot de passe" name="pswd" required>
                            </div>
                        </div>
                         <div class="form-group form-float">
                              <select class="form-control show-tick" required>
                                    <option value="admin">normal</option>
                                    <option value="normal">administrateur</option>
                              </select>
                         </div>


                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
