 <div class="dashboard_sidebar_list">
          <p class="fz15 fw400 ff-heading pl30">MENU</p>
          <div class="sidebar_list_item">
            <a href="/" class="items-center {{request()->routeIs('main.index') ? '-is-active' : ''}}"><i class="flaticon-home mr15"></i>Tableau de Bord</a>
          </div>


          <p class="fz15 fw400 ff-heading pl30 mt30">Parametrage</p>
          <div class="sidebar_list_item ">

            <a href="/departements"class="items-center {{request()->routeIs('departements.index','departements.create','departements.edit','departements.show') ? '-is-active' : ''}}"><i class="flaticon-presentation mr15"></i>Departements</a>
            {{-- <a href="/secteurs"class="items-center {{request()->routeIs('secteurs.index','secteurs.create','secteurs.edit','secteurs.show') ? '-is-active' : ''}}"><i class="flaticon-web mr15"></i>Secteurs</a> --}}
            <a href="/services"class="items-center {{request()->routeIs('services.index','services.create','services.edit','services.show') ? '-is-active' : ''}}"><i class="flaticon-content mr15"></i>Services</a>
          </div>
        </div>
