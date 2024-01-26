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
            <a href="/administration/demandes_inscription" class="items-center {{ request()->is('administration/demandes_inscription') ? '-is-active' : '' }}"><i class="flaticon-document mr15"></i>Demandes d'inscriptions</a>
        </div>
        {{-- <div class="sidebar_list_item">
            <a href="/administration/demandes_services" class="items-center {{ request()->is('administration/demandes_services') ? '-is-active' : '' }}"><i class="flaticon-like mr15"></i>Demandes de Services </a>
        </div> --}}
        <p class="fz15 fw400 ff-heading pl30 mt30">Paramétrages</p>
        <div class="sidebar_list_item ">
            <a href="/administration/departements"
                class="items-center {{ request()->is('administration/departements', 'administration/departements/create') ? '-is-active' : '' }} "><i
                    class="flaticon-presentation mr15"></i>Départements</a>
        </div>
       
        <div class="sidebar_list_item ">
            <a href="/administration/services"
                class="items-center {{ request()->is('administration/services', 'administration/services/create') ? '-is-active' : '' }}"><i
                    class="flaticon-briefcase mr15"></i>Services</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Blogs</p>
       
        <div class="sidebar_list_item ">
            <a href="/administration/blogs" class="items-center {{ request()->is('administration/blogs') ? '-is-active' : '' }}"><i class="fa-solid fa-user mr15"></i>Blog</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Comptes</p>
        
        <div class="sidebar_list_item ">
            <a href="/administration/profil/edit" class="items-center {{ request()->is('administration/profil/edit') ? '-is-active' : '' }}"><i class="fa-solid fa-user mr15"></i>Parametrage de compte</a>
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
