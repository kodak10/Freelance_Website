<div class="dashboard__sidebar d-none d-lg-block">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
            <a href="#" class="items-center -is-active"><i class="flaticon-home mr15"></i>Menu Général</a>
        </div>
        {{-- <p class="fz15 fw400 ff-heading pl30 mt30">Gestion des inscriptions</p>
        <div class="sidebar_list_item">
            <a href="/user" class="items-center"><i class="flaticon-document mr15"></i>Demandes d'inscription</a>
        </div>
        <div class="sidebar_list_item">
            <a href="#" class="items-center"><i class="flaticon-like mr15"></i>Demandes de Services </a>
        </div>--}}
        <p class="fz15 fw400 ff-heading pl30 mt30">Conversation</p>

        <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="flaticon-briefcase mr15"></i>Messages</a>
        </div>

        <p class="fz15 fw400 ff-heading pl30 mt30">Comptes</p>
        <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="fa-solid fa-user mr15"></i>Mon Profil</a>
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