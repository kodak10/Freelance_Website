
@extends('layouts.app')
@section('content')

    <!-- SignUp  -->
    <section class="our-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
                    <div class="main-title text-center">
                        <h2 class="title">Connexion Service Clients</h2>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-delay="300ms">
                <div class="col-xl-6 mx-auto">
                    <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">
                        <form action="">
                            <div class="mb20">
                                <label class="form-label fw600 dark-color">Email</label>
                                <input type="email" class="form-control" placeholder="projetencours@gmail.com">
                            </div>
                            <div class="mb15">
                                <label class="form-label fw600 dark-color">Mot de passe</label>
                                <input type="text" class="form-control" placeholder="*******">
                            </div>
                            <div class="d-grid mb20">
                                <button class="ud-btn btn-thm default-box-shadow2" type="button" ><a href="/administration">Se Connecter</a>  <i class="fal fa-arrow-right-long"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection