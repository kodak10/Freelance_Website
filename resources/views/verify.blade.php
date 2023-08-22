@extends('layouts.app')

<style>
    header.nav-homepage-style {
        position: relative !important;
    }
    .mobilie_header_nav{
        background-color: #5BBB7B !important;
        margin-bottom: 50px
    }

</style>

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
            </div>
            <div class="card">

                <div class="card-header"><strong>{{ __('Verification de votre adresse email') }}</strong></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    {{ __('Un lien de vérification a été envoyé à votre adresse e-mail.') }}
                    {{ __("Si vous n'avez pas reçu l'e-mail, cliqué ici") }},
                    {{-- <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form> --}}
                    <div class="row mt-3">
                        <a href="/login"class="btn btn-danger text-white p-2 ">Se Connecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
