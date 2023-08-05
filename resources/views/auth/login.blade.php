@extends('layouts.app')
@section('content')
    <!-- LogIn -->
    <section class="our-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
                    @if (session()->has('not_approved'))
                        <div class="text-center alert alart_style_three text-white alert-dismissible fade show mb20 bg-warning"
                            role="alert">Votre Demande
                            d'inscription est
                            en cours d'approbation par le service client
                            <i class="btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                        </div>
                    @endif
                    <div class="main-title text-center">
                        <h2 class="title ">Connexion</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInRight" data-wow-delay="300ms">
                <div class="col-xl-6 mx-auto">
                    <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">
                        <div class="mb30">
                            <h4>Nous sommes heureux de vous revoir!</h4>
                            <p class="text">Vous n'avez pas de compte ? <a href="/register"
                                    class="text-thm fw-bold">S'inscrire</a></p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb20">
                                <label for="email" class=" col-form-label text-md-end">{{ __('Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"placeholder="projetencours@gmail.com" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb15">
                                <label for="password" class="col-form-label text-md-end">{{ __('Mot de Passe') }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"placeholder="*******" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
                                <label class="custom_checkbox fz14 ff-heading"> {{ __('Se Souvenir de moi') }}
                                    <input class="form-check-input" {{ old('remember') ? 'checked' : '' }} type="checkbox"
                                        name="remember" id="remember" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="fz14 ff-heading" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="d-grid mb20">
                                <button class="ud-btn btn-thm" type="submit">{{ __('Se Connecter') }} <i
                                        class="fal fa-arrow-right-long"></i></button>
                            </div>
                        </form>

                        <div class="hr_content mb20">
                            <hr><span class="hr_top_text">OU</span>
                        </div>

                        <div class="d-md-flex justify-content-between">
                            <button class="ud-btn btn-google fz14 fw400 mb-2 mb-md-0" type="button"><i
                                    class="fab fa-google"></i> Avec Gmail</button>
                            <button class="ud-btn btn-fb fz14 fw400 mb-2 mb-md-0" type="button"><i
                                    class="fab fa-facebook-f pr10"></i> Avec Facebook</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
