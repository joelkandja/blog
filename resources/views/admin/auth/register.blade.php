@extends('layouts/auth-master')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-imag"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Créer un compte</h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Nom">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Prénom">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Mot de passe">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeter Mot de passe">
                                </div>
                            </div>
                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                Créer un compte
                            </a>
                            <hr>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Vous avez un compte? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection