<nav id="main-nav" class="main-nav">
    <ul id="menu-primary-menu" class="menu">

        <li class="menu-item {{ request()->is('/')? 'current-item' : '' }}">
            <a href="/">Accueil </a>
        </li>
        <li class="menu-item {{ request()->is('about') ? 'current-item' : ''}}">
            <a href="/about">A Propos </a>
        </li>
        <li class="menu-item {{ request()->is('services') ? 'current-item' : ''}}">
            <a href="/services">Trouvez un service </a>
        </li>
        <li class="menu-item {{ request()->is('blog') ? 'current-item' : ''}}">
            <a href="/blog">Blog </a>
        </li>
        <li class="menu-item {{ request()->is('contact') ? 'current-item' : '' }}">
            <a href="/contact">Contact </a>
        </li>

       
    </ul>
</nav>
