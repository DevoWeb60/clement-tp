<header id="header">
    <h1>
        <a href="{{ route($home) }}">
            <img src="{{ asset('storage/' . $siteInfo->logo) }}" alt="Clément TP | Clément Construction">
        </a>
    </h1>
    <nav>
        <img src="{{ asset('storage/svg/close.svg') }}" class="svg" alt="close" id="menu-close">
        <ul>
            @foreach ($menus as $entry)
                <li><a href="{{ route($entry->link) }}">{{ $entry->name }}</a></li>
            @endforeach
        </ul>
    </nav>
    <img src="{{ asset('storage/svg/hamburger.svg') }}" class="svg" alt="hamburger" id="hamburger">
</header>
