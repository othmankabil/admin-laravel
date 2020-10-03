@extends('layout.master')
@section('title', 'Modifier Offre')
@section('parentPageTitle', 'sales')
@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Modifier</strong> Offre</h2>

                </div>
                <div class="body">
                    <form id="form_validation" method="POST">

                        <div class="form-group form-float">
                                <select class="form-control show-tick">
                                    <option value="">-- select Offre--</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="help-info">Prix</div>
                            <input type="number" class="form-control" name="number" required>
                        </div>
                        <div class="form-group form-float">
                            <textarea name="Note" cols="30" rows="5" placeholder="Note" class="form-control no-resize" required></textarea>
                        </div>

                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
