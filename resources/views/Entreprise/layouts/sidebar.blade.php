<div class="dashboard__sidebar d-none d-lg-block">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item mt-5">
            <a href="#" class="items-center"></a>
        </div>
        <div class="sidebar_list_item mt-5">
            <a href="/" class="items-center"><i class="flaticon-home mr15"></i>Retour au Site</a>
        </div>
        <div class="sidebar_list_item">
            <a href="/compagny" class="items-center {{ request()->is('compagny') ? '-is-active' : '' }}"><i class="flaticon-home mr15"></i>Menu Général</a>        </div>
        {{-- <p class="fz15 fw400 ff-heading pl30 mt30">Message</p>
        <div class="sidebar_list_item">
            <a href="#" class="items-center {{ request()->is('compagny/message') ? '-is-active' : '' }}"><i class="flaticon-document mr15"></i>Messages</a>
        </div> --}}
        {{-- <div class="sidebar_list_item">
            <a href="#" class="items-center"><i class="flaticon-like mr15"></i>Demandes de Services </a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Paramétrage</p>
        <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="flaticon-presentation mr15"></i>Les Départements</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="flaticon-briefcase mr15"></i>Les Services</a>
        </div> --}}

        <p class="fz15 fw400 ff-heading pl30 mt30">Services</p>
        <div class="sidebar_list_item ">
            <a href="/compagny/service" class="items-center {{ request()->is('compagny/service') ? '-is-active' : '' }}"><i class="fa-solid fa-user mr15"></i>Liste de Service</a>

            <a href="/compagny/demandes" class="items-center {{ request()->is('compagny/demandes') ? '-is-active' : '' }}"><i class="fa-solid fa-user mr15"></i>Demandes de Service</a>
        </div>
        <p class="fz15 fw400 ff-heading pl30 mt30">Comptes</p>
        <div class="sidebar_list_item ">
            <a href="/compagny/profil/edit" class="items-center {{ request()->is('compagny/profil/edit') ? '-is-active' : '' }}"><i class="fa-solid fa-user mr15"></i>Paramétrage de compte</a>
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