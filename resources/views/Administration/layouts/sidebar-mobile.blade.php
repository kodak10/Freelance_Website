<div class="dashboard_navigationbar d-block d-lg-none">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i>  Navigation</button>
        <ul id="myDropdown" class="dropdown-content">
            <li class=""><a href="/"><i class="flaticon-home mr10"></i>Retour au Site</a></li>
            <li class="{{ request()->is('administration') ? 'active' : '' }} "><a href="/administration"><i class="flaticon-home mr10"></i>Menu Général</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Gestion des inscriptions</p></li>
            <li class="{{ request()->is('administration/clients') ? 'active' : '' }} "><a href="/administration/clients"><i class="flaticon-document mr10"></i>Liste des Clients</a></li>
            <li class="{{ request()->is('administration/entreprises') ? 'active' : '' }} "><a href="/administration/entreprises"><i class="flaticon-document mr10"></i>Liste des Entreprises</a></li>

            <li class="{{ request()->is('administration/demandes_inscription') ? 'active' : '' }} "><a href="/administration/demandes_inscription"><i class="flaticon-document mr10"></i>Demandes d'inscription</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Paramétrage</p></li>
            <li class="{{ request()->is('administration/departements') ? 'active' : '' }} "><a href="/administration/departements"><i class="flaticon-chat mr10"></i>Les Départements</a></li>
            <li class="{{ request()->is('administration/services') ? 'active' : '' }} "><a href="/administration/services"><i class="flaticon-review-1 mr10"></i>Les Services</a></li>
            
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Blog</p></li>
            <li class="{{ request()->is('administration/blog') ? 'active' : '' }} "><a href="/administration/blog"><i class="flaticon-document mr10"></i>Blog</a></li>

            <li><p class="fz15 fw400 ff-heading mt30 pl30">Comptes</p></li>
            <li class="{{ request()->is('administration/profil/edit') ? 'active' : '' }} "><a href="#"><i class="flaticon-receipt mr10"></i>Parametrage de compte</a></li>
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