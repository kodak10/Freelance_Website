<div class="dashboard__sidebar d-none d-lg-block">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item mt-5">
            <a href="#" class="items-center"></a>
        </div>
        <div class="sidebar_list_item mt-5">
            <a href="/" class="items-center"><i class="flaticon-home mr15"></i>Retour au Site</a>
        </div>
        <div class="sidebar_list_item">
            <a href="/administration" class="items-center {{ request()->is('administration') ? '-is-active' : '' }}"><i class="flaticon-home mr15"></i>Menu Général</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Gestion des inscriptions</p>
        <div class="sidebar_list_item">
            <a href="/administration/clients" class="items-center {{ request()->is('administration/clients') ? '-is-active' : '' }}"><i class="flaticon-document mr15"></i>Liste des clients</a>
        </div>
        <div class="sidebar_list_item">
            <a href="/administration/entreprises" class="items-center {{ request()->is('administration/entreprises') ? '-is-active' : '' }}"><i class="flaticon-document mr15"></i>Liste des Entreprises</a>
        </div>
        <div class="sidebar_list_item">
            <a href="/administration/demandes_inscriptions" class="items-center"><i class="flaticon-document mr15"></i>Demandes d'inscriptions</a>
        </div>
        <div class="sidebar_list_item">
            <a href="/administration/demandes_services" class="items-center {{ request()->is('administration/demandes_services') ? '-is-active' : '' }}"><i class="flaticon-like mr15"></i>Demandes de Services </a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Paramétrage</p>
        <div class="sidebar_list_item ">
            <a href="/administration/departements"
                class="items-center  {{ request()->is('departements.index', 'departements.create', 'departements.edit', 'departements.show') ? '-is-active' : '' }}"><i
                    class="flaticon-presentation mr15"></i>Les Départements</a>
        </div>
       
        <div class="sidebar_list_item ">
            <a href="/administration/services"
                class="items-center {{ request()->is('services.index', 'services.create', 'services.edit', 'services.show') ? '-is-active' : '' }}"><i
                    class="flaticon-briefcase mr15"></i>Les Services</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Comptes</p>
        {{-- <div class="sidebar_list_item ">
            <a href="/administration/acces_utilisateurs" class="items-center {{ request()->routeIs('acces_utilisateurs.index', 'acces_utilisateurs.create', 'acces_utilisateurs.edit', 'acces_utilisateurs.show') ? '-is-active' : '' }}"><i class="flaticon-user mr15"></i>Accès utilisateurs</a>
        </div> --}}
        <div class="sidebar_list_item ">
            <a href="administration/profil/edit" class="items-center {{ request()->is('administration/profil/edit') ? '-is-active' : '' }}"><i class="fa-solid fa-user mr15"></i>Parametrage de compte</a>
        </div>
        <div class="sidebar_list_item ">

            <a href="javascript:void(0)"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <i class="flaticon-logout mr15"></i>Se Déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                    @csrf
                </form>
        </div>
    </div>
</div>
