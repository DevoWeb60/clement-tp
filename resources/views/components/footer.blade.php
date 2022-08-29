<footer>
    <div class="main">
        <a href="#header">
            <img src="{{ asset('storage/svg/min-logo.svg') }}"
                alt="Clément TP construction rénovation batîment haut de france">
        </a>
        <form action="" method="POST">
            <input type="text" name="newsletter" placeholder="Votre adresse mail">
            <button type="submit">S'inscrire</button>
        </form>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('about') }}">A propos</a></li>
            <li><a href="{{ route('services') }}">Nos services</a></li>
            <li><a href="{{ route('projects') }}">Nos projets</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('jobOffer') }}">Recrutement</a></li>
            <li><a href="{{ route('home') }}">Politique de confidentialité</a></li>
        </ul>
    </div>
    <div class="socials">
        <h3>Suivez nous</h3>
        <ul>
            <li>
                <a href="http://facebook.com" target="_blank">
                    <img src="{{ asset('storage/svg/facebook.svg') }}" alt="Facebook btp">
                </a>
            </li>
            <li>
                <a href="http://instagram.com" target="_blank">
                    <img src="{{ asset('storage/svg/instagram.svg') }}" alt="instagram btp">
                </a>
            </li>
            <li>
                <a href="http://pinterest.com" target="_blank">
                    <img src="{{ asset('storage/svg/pinterest.svg') }}" alt="pinterest btp">
                </a>
            </li>
            <li>
                <a href="http://linkedin.com" target="_blank">
                    <img src="{{ asset('storage/svg/linkedin.svg') }}" alt="LinkedIn btp">
                </a>
            </li>
        </ul>
    </div>
</footer>
