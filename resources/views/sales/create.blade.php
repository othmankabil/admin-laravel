@extends('layout.master')
@section('title', 'Ajouter Offre')
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
                    <h2><strong>Ajouter Offre</strong></h2>

                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="{{route('sales.store')}}">
                        @csrf
                        <h2 class="card-inside-title">Offre</h2>
                        <div class="form-group form-float" >
                                <select name="produit_id" class="form-control show-tick" required>
                                    <option value="{{null}}">-- Selectionner le Produit --</option>
                                    @forelse(\App\Produit::all() as $produit)
                                    <option value="{{$produit->id}}">{{$produit->nom}}</option>
                                    @empty
                                        <option value="{{null}}">Ya aucun produit pour le moment, contactez votre administrateur</option>
                                    @endforelse
                                </select>
                        </div>
                        <div class="form-group form-float">
                            <h2 class="card-inside-title">Prix</h2>
                            <input type="number" class="form-control" name="prix" required>
                        </div>
                        <div class="form-group form-float">
                            <h2 class="card-inside-title">Note</h2>
                            <textarea name="note" cols="30" rows="5" placeholder="Note" class="form-control no-resize" required></textarea>
                        </div>

                        <button class="btn btn-raised btn-primary waves-effect" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
