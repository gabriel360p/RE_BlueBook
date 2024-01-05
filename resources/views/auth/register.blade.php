@extends('layouts.auth')

@section('content')
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="card mt-5">
                    <div class="card-body">
                        <a href="#" class="d-flex justify-content-center mt-3">
                            <img src="../assets/images/logo-dark.svg" />
                        </a>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="auth-header">
                                    <h2 class="text-secondary mt-5"><b>Cadastro</b></h2>
                                    <p class="f-16 mt-2">Entre com as suas credenciais para continuar</p>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted" style="width: 100%">
                            <img src="../assets/images/authentication/google-icon.svg" />Cadastre-se com o google
                        </button>
                        <div class="saprator mt-3">
                            <span>ou</span>
                        </div>
                        <div class="row">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" required value="{{ @old('name') }}" name="name"
                                        class="form-control" id="floatingInput" placeholder="Nome completo" />
                                    <label for="floatingInput">Nome completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" required class="form-control" id="floatingInput"
                                        value="{{ @old('email') }}" name="email" placeholder="Email" />
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" required value="{{ @old('password') }}" name="password"
                                        class="form-control" id="floatingInput" placeholder="Senha" />
                                    <label for="floatingInput">Senha</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" required value="{{ @old('password_confirmation') }}"
                                        name="password_confirmation" class="form-control" id="floatingInput"
                                        placeholder="Confirmar Senha" />
                                    <label for="floatingInput">Confirmar Senha</label>
                                </div>
                                <div class="d-grid mt-4">
                                    <button class="btn btn-secondary p-2">Cadastrar-se</button>
                                </div>
                            </form>
                            <hr />
                            <a href="{{ route('login') }}">
                                <h5 class="d-flex justify-content-center">Possui conta?</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
