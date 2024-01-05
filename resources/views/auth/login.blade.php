@extends('layouts.auth')

@section('content')
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <a href="#" class="d-flex justify-content-center">
                            <img src="../assets/images/logo-dark.svg" />
                        </a>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="auth-header">
                                    <h2 class="text-secondary mt-5"><b>Bem vindo de volta!</b></h2>
                                    <p class="f-16 mt-2">Entre com as suas credenciais para continuar</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                <img src="../assets/images/authentication/google-icon.svg" />Logar com o google
                            </button>
                        </div>
                        <div class="saprator mt-3">
                            <span>ou</span>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input required type="email" class="form-control" name="email"
                                    value="{{ @old('email') }}" id="floatingInput" placeholder="Email" />
                                <label for="floatingInput">Email</label>
                                @error('email')
                                    <span class="badge bg-warning">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="password" class="form-control" name="password"
                                    value="{{ @old('password') }}" id="floatingInput" placeholder="Senha" />
                                <label for="floatingInput">Senha</label>
                                @error('email')
                                    <span class="badge bg-warning">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" />
                                    <label class="form-check-label text-muted" for="customCheckc1">Lembrar-me</label>
                                </div>
                                <h5 class="text-secondary">Esqueceu a senha?</h5>
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-secondary">Entrar</button>
                            </div>
                        </form>
                        <hr />
                        <a href="{{ route('register') }}">
                            <h5 class="d-flex justify-content-center">Não possui conta?</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection
