<header id="header">
    <h1>
        <a href="{{ route('home') }}">
            <img src="{{ asset('storage/svg/logo.svg') }}" alt="Clément TP | Clément Construction">
        </a>
    </h1>
    <nav>
        <img src="{{ asset('storage/svg/close.svg') }}" class="svg" alt="close" id="menu-close">
        <ul>
            <li><a href="{{ route('about') }}">A propos</a></li>
            <li><a href="{{ route('services') }}">Nos services</a></li>
            <li><a href="{{ route('projects') }}">Nos projets</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <img src="{{ asset('storage/svg/hamburger.svg') }}" class="svg" alt="hamburger" id="hamburger">
</header>
