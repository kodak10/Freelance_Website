<div class="dashboard__sidebar d-none d-lg-block">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
            <a href="/administration" class="items-center {{ request()->routeIs('home')? '-is-active' : '' }}"><i class="flaticon-home mr15"></i>Menu Général</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Gestion des inscriptions</p>
        <div class="sidebar_list_item">
            <a href="/administration" class="items-center"><i class="flaticon-document mr15"></i>Demandes d'inscription</a>
        </div>
        <div class="sidebar_list_item">
            <a href="#" class="items-center"><i class="flaticon-like mr15"></i>Demandes de Services </a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Paramétrage</p>
        <div class="sidebar_list_item ">
            <a href="/administration/departements"
                class="items-center {{ request()->routeIs('departements.index', 'departements.create', 'departements.edit', 'departements.show') ? '-is-active' : '' }}"><i
                    class="flaticon-presentation mr15"></i>Les Départements</a>
        </div>
        {{-- <div class="sidebar_list_item ">
            <a href="/administration/secteurs"
                class="items-center {{ request()->routeIs('secteurs.index', 'secteurs.create', 'secteurs.edit', 'secteurs.show') ? '-is-active' : '' }}"><i
                    class="flaticon-briefcase mr15"></i>Les Secteurs</a>
        </div> --}}
        <div class="sidebar_list_item ">
            <a href="/administration/services"
                class="items-center {{ request()->routeIs('services.index', 'services.create', 'services.edit', 'services.show') ? '-is-active' : '' }}"><i
                    class="flaticon-briefcase mr15"></i>Les Services</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Comptes</p>
        {{-- <div class="sidebar_list_item ">
            <a href="/administration/acces_utilisateurs" class="items-center {{ request()->routeIs('acces_utilisateurs.index', 'acces_utilisateurs.create', 'acces_utilisateurs.edit', 'acces_utilisateurs.show') ? '-is-active' : '' }}"><i class="flaticon-user mr15"></i>Accès utilisateurs</a>
        </div> --}}
        <div class="sidebar_list_item ">
            <a href="#" class="items-center "><i class="fa-solid fa-user mr15"></i>Mon Profil</a>
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
