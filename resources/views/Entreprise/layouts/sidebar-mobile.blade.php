<div class="dashboard_navigationbar d-block d-lg-none">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i>  Navigation</button>
        <ul id="myDropdown" class="dropdown-content">
            <li class="active"><a href="/compagny"><i class="flaticon-home mr10"></i>Menu Général</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Services</p></li>
            <li><a href="#"><i class="flaticon-receipt mr10"></i>Liste de Service</a></li>
            <li><a href="/compagny/demandes"><i class="flaticon-receipt mr10"></i>Demandes de Service</a></li>
            <li><p class="fz15 fw400 ff-heading mt30 pl30">Comptes</p></li>
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