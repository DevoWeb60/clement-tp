<x-layoutApp title="Connexion">
    <div class="title">
        <h2>Connexion</h2>
    </div>
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <x-inputGroup type="email" label="Adresse mail" name="email" required="true" />
            <x-inputGroup type="password" label="Mot de passe" name="password" required="true" />
            <button type="submit" class="btn">Connexion</button>
        </form>
    </div>
    </div>
</x-layoutApp>
