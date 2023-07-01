@extends('layouts/auth-master')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-imag"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Connectez-vous ! </h1>
                                    </div>
                                    @if ($errors)
                                        <p class="alert-danger">{{ $errors->first('message') }}
                                        </p>
                                    @endif
                                    <form class="user" method="POST" action="{{ route('auth.login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email"
                                                name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Mot de passe" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Restez
                                                    connecter</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Se connecter
                                        </button>
                                        <hr>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('auth.show-register') }}">Créer un compte!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
