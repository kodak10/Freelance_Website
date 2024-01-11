<nav id="main-nav" class="main-nav">
    <ul id="menu-primary-menu" class="menu">
        <li class="menu-item {{ request()->routeIs('/') ? 'current-item' : '' }} ">
            <a href="/">Accueil </a>
        </li>
        <li class="menu-item {{ request()->routeIs('about') ? 'current-item' : ''}}">
            <a href="/about">A Propos </a>
        </li>
        <li class="menu-item {{ request()->routeIs('services') ? 'current-item' : ''}}">
            <a href="/services">Trouver un service </a>
        </li>
        <li class="menu-item {{ request()->routeIs('contact') ? 'current-item' : '' }}">
            <a href="/contact">Contact </a>
        </li>

       
    </ul>
</nav>
