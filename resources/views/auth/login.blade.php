@extends('layout.authentication')
@section('title', 'Login')
@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
        <form method="post" class="card auth_form" action="{{route('login')}}">
            @csrf
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Authentification</h5>
            </div>
            <div class="body">
                <div class="input-group mb-3">
                    <input name="login" type="text" class="form-control @error('login') is-invalid @enderror" autocomplete="login" id="login" typeof="login" placeholder="Login" autofocus>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                    </div>
                    @error('login')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input  name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" autocomplete="current-password" >
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="checkbox">
                    <input name="remember" id="remember"  type="checkbox">
                    <label for="remember">Remember Me</label>
                </div>
                <button type="submit" value="" class="btn btn-primary btn-block waves-effect waves-light">Se connecter</button>
            </div>
        </form>
        <div class="copyright text-center">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card">
            <img src="{{asset('assets/images/signin.svg')}}" alt="Sign In"/>
        </div>
    </div>
</div>
@stop
