<div class="dashboard_navigationbar d-block d-lg-none">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i>  Navigation</button>
        <ul id="myDropdown" class="dropdown-content">
            <li class="active"><a href="/administration"><i class="flaticon-home mr10"></i>Menu Général</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Gestion des inscriptions</p></li>
            <li><a href="/administration"><i class="flaticon-document mr10"></i>Demandes d'inscription</a></li>
            <li><a href="#"><i class="flaticon-like mr10"></i>Demandes de Services</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Paramétrage</p></li>
            <li><a href="/administration/departements"><i class="flaticon-chat mr10"></i>Les Départements</a></li>
            {{-- <li><a href="/administration/secteurs"><i class="flaticon-review-1 mr10"></i>Les Secteurs</a></li> --}}
            <li><a href="/administration/services"><i class="flaticon-review-1 mr10"></i>Les Services</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Comptes</p></li>
            {{-- <li><a href="/administration/acces_utilisateurs"><i class="flaticon-receipt mr10"></i>Accès utilisateurs</a></li> --}}
            <li><a href="#"><i class="flaticon-receipt mr10"></i>Mon Profil</a></li>
            <li>
                <a href="javascript:void(0)"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    <i class="flaticon-logout mr15"></i>Se Déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                        @csrf
                    </form>
            </li>
        </ul>
    </div>
</div>