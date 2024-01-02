<style>
    .fa-solid{
        font-size: 18px;
    }
    .sub-account-item a{
        font-weight: 800;
        font-size: 16px;
    }
   
</style>
<header id="header" class="header header-default style-absolute header-fixed">
    <div class="tf-container ct2">
    <div class="row">
        <div class="col-md-12">
        <div class="sticky-area-wrap">
            <div class="header-ct-left">
            <div >
                <a href="/">
                <img class="site-logo" style="width: 100px !important; height:100px !important;" src="{{asset('assets/images/logo-white.png')}}" alt="Logo"/>
                </a>
            </div>
            <div class="categories">
                <a href="#"><span class="icon-grid"></span>Categories</a>
                <div class="sub-categorie">
                <ul class="pop-up">
                    @foreach ($categories as $categorie )
                        <li>
                            <a class="text-uppercase" href="#"><span class="{{$categorie->icones}}"></span>{{$categorie->libelle}}</a>
                        </li>
                    @endforeach


                </ul>
                </div>
            </div>
            </div>

            <div class="header-ct-center">
                <div class="nav-wrap">
                    @include('layouts.navbar-desktop')
                </div>
            </div>

            <div class="header-ct-right">

                @auth

                <div class="header-customize-item account">
                    <img src="{{asset('assets/website/images/user/avatar/image-01.jpg')}}" alt="" />
                    @if (auth()->user()->hasRole('client'))
                        <div class="name">
                            {{Auth::user()->name}}<span class="icon-keyboard_arrow_down"></span>
                        </div>
                        <div class="sub-account">
                        <div class="sub-account-item">
                            <a href="/user"><span class="icon-dashboard"></span>Menu Général</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="/user/mon_compte"><span class="icon-mypackage"></span>Parametrage du compte</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="/user/message"><span class="icon-chat"></span>Messages</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">

                                <span class="icon-log-out"></span> Se Déconnecter</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="">
                                    @csrf
                                </form>
                        </div>

                    @elseif(auth()->user()->hasRole('compagny'))
                        <div class="name">
                            {{Auth::user()->name}}<span class="icon-keyboard_arrow_down"></span>
                        </div>
                        <div class="sub-account">
                        <div class="sub-account-item">
                            <a href="/compagny"><span class="icon-dashboard"></span>Menu Général</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="/compagny/mon_compte"><span class="icon-mypackage"></span>Parametrage du compte</a>
                        </div>
                        <div class="sub-account-item">
                            <a href="/compagny/create-service"><span class="icon-submit"></span>Poster un service</a>
                        </div>
                        <div class="sub-account-item">
                            <a href="/compagny/service"><span class="icon-work"></span>Mes Services</a>
                        </div>
                        <div class="sub-account-item">
                            <a href="/compagny/message"><span class="icon-chat"></span>Messages</a>
                        </div>

                        <div class="sub-account-item">
                            <a href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">

                                <span class="icon-log-out"></span> Se Déconnecter</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="">
                                    @csrf
                                </form>
                            {{-- <a href="/dashboard-entreprise"><span class="icon-dashboard"></span>Menu Général</a> --}}
                        </div>
                    @elseif(auth()->user()->hasRole('serviceClient'))
                        <li><a href="/administration" class="list-item ud-btn btn-white add-joining text-uppercase">Aller au tableau de bord</a></li>
                    @else
                        <p>Erreur d'authentification</p>
                    @endif




                    {{-- <div class="sub-account-item">
                        <a href="/dashboard-entreprise"><span class="icon-dashboard"></span>Menu Général</a>
                      </div>
                      <div class="sub-account-item">
                        <a href="employer-profile.html"><span class="icon-profile"></span> Aperçu du compte</a>
                      </div>
                      <div class="sub-account-item">
                        <a href="/mon_compte"><span class="icon-mypackage "></span> Parametrage du compte</a>
                      </div>
                      <div class="sub-account-item">
                        <a href="/create-service"><span class="icon-submit"></span> Poster un service</a>
                      </div>
                      <div class="sub-account-item">
                        <a href="employer-my-job.html"><span class="icon-work"></span> Mes Services</a>
                      </div>

                      <div class="sub-account-item">
                        <a href="/message"><span class="icon-chat"></span> Messages</a>
                      </div>

                      <div class="sub-account-item">
                        <a href="/edit-password"><span class="icon-change-passwords"></span> Modification de mot de passe
                        </a>
                      </div>

                      <div class="sub-account-item">


                        <a href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">

                            <span class="icon-log-out"></span> Se Déconnecter</a>
                            <form id="logout-form" action="" method="POST" style="">
                                @csrf
                            </form>
                      </div> --}}



                    {{-- <div class="sub-account-item">
                        <a href="dashboard/candidates-profile-setting.html"><span class="icon-profile"></span> Profile</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-resumes.html"><span class="icon-resumes"></span> Resumes</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-my-applied.html"><span class="icon-my-apply"></span> My Applied</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-save-jobs.html"><span class="icon-work"></span> Saved Jobs</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-alerts-jobs.html"><span class="icon-bell1"></span> Candidate Alerts</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-messages.html"><span class="icon-chat"></span> Messages</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-following-employers.html"><span class="icon-following"></span> Following Employers</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-meetings.html"><span class="icon-meeting"></span> Meeting</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-change-passwords.html"><span class="icon-change-passwords"></span> Change
                        Passwords</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="dashboard/candidates-delete-profile.html"><span class="icon-trash"></span> Delete Profile</a>
                    </div>
                    <div class="sub-account-item">
                        <a href="#"><span class="icon-log-out"></span> Log Out</a>
                    </div>
                    </div> --}}
                </div>
                @endauth

                <!-- Liens à afficher uniquement lorsque l'utilisateur n'est pas connecté -->
                @guest
                    <div class="header-customize-item button mr-3">
                        <a href="/connexion">Se Connecter</a>
                    </div>
                    <div class="header-customize-item button">
                        <a href="/inscription">S'inscire</a>
                    </div>
                @endguest






            </div>

            <div class="nav-filter">
                <div class="nav-mobile"><span></span></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</header>
