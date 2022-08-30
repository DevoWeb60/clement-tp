@auth
    <div class="on-header">
        <h3>Bienvenue {{ ucfirst($user->firstname) }} {{ ucfirst($user->lastname) }}</h3>
        <a href="{{ route($route) }}">{{ $slot }}</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Déconnexion</button>
        </form>
    </div>
@endauth
