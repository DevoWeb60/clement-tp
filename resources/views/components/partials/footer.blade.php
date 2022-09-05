<footer id="footer">
    <div class="main">
        <a href="#header">
            <img src="{{ asset('storage/svg/min-logo.svg') }}" class="logo-footer"
                alt="Clément TP construction rénovation batîment haut de france">
        </a>
        <x-form action="{{ route('newsletter') }}" method="POST">
            <input type="hidden" name="route" value="{{ request()->route()->getName() }}">
            <input type="text" name="email" placeholder="Votre adresse mail">
            <button type="submit">S'inscrire</button>
        </x-form>
        <ul>
            @foreach ($menus as $menu)
                <li><a href="{{ route($menu->link) }}">{{ $menu->name }}</a></li>
            @endforeach
            <li><a href="{{ route('home') }}">Politique de confidentialité</a></li>
        </ul>
    </div>
    <div class="socials">
        <h3>Suivez nous</h3>
        <ul>
            <li>
                <a href="{{ $siteInfo->facebook }}" target="_blank">
                    <img src="{{ asset('storage/svg/facebook.svg') }}" alt="Facebook btp">
                </a>
            </li>
            <li>
                <a href="{{ $siteInfo->instagram }}" target="_blank">
                    <img src="{{ asset('storage/svg/instagram.svg') }}" alt="instagram btp">
                </a>
            </li>
            <li>
                <a href="{{ $siteInfo->pinterest }}" target="_blank">
                    <img src="{{ asset('storage/svg/pinterest.svg') }}" alt="pinterest btp">
                </a>
            </li>
            <li>
                <a href="{{ $siteInfo->linkedin }}" target="_blank">
                    <img src="{{ asset('storage/svg/linkedin.svg') }}" alt="LinkedIn btp">
                </a>
            </li>
        </ul>
    </div>
</footer>
