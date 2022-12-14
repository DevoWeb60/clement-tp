<footer id="footer">
    <div class="main">
        <a href="#header">
            <img src="{{ asset('storage/svg/min-logo.svg') }}" class="logo-footer"
                alt="Clément TP construction rénovation batîment haut de france">
        </a>
        <x-form action="{{ route('newsletter') }}" method="POST">
            <input type="hidden" name="route" value="{{ request()->route()->getName() }}">
            <input type="text" name="email" placeholder="Votre adresse mail">
            <button type="submit">S'inscrire à la newsletter</button>
        </x-form>
        <ul>
            @foreach ($menus as $menu)
                <li><a href="{{ route($menu->link) }}">{{ $menu->name }}</a></li>
            @endforeach
            <li><a href="{{ route('privacy') }}">Politique de confidentialité</a></li>
        </ul>
    </div>
    <div class="socials">
        <h3>Suivez nous sur </h3>
        <ul>

            @if ($siteInfo->facebook)
                <li>
                    <a href="{{ $siteInfo->facebook }}" target="_blank">
                        <img src="{{ asset('storage/svg/facebook.svg') }}" alt="Facebook btp">
                    </a>
                </li>
            @endif
            @if ($siteInfo->instagram)
                <li>
                    <a href="{{ $siteInfo->instagram }}" target="_blank">
                        <img src="{{ asset('storage/svg/instagram.svg') }}" alt="instagram btp">
                    </a>
                </li>
            @endif
            @if ($siteInfo->pinterest)
                <li>
                    <a href="{{ $siteInfo->pinterest }}" target="_blank">
                        <img src="{{ asset('storage/svg/pinterest.svg') }}" alt="pinterest btp">
                    </a>
                </li>
            @endif
            @if ($siteInfo->linkedin)
                <li>
                    <a href="{{ $siteInfo->linkedin }}" target="_blank">
                        <img src="{{ asset('storage/svg/linkedin.svg') }}" alt="LinkedIn btp">
                    </a>
                </li>
            @endif
        </ul>
    </div>
</footer>
