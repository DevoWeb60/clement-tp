<x-layoutAdmin title="Inscription">
    <div class="title">
        <h1>Nouveau utilisateur</h1>
    </div>
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <x-inputGroup type="text" label="Prénom" name="firstname" required="true" />
            <x-inputGroup type="text" label="Nom" name="lastname" required="true" />
            <x-inputGroup type="email" label="Adresse mail" name="email" required="true" />
            <x-inputGroup type="password" label="Mot de passe" name="password" required="true" />
            <x-inputGroup type="password" label="Confirmer le mot de passe" name="password_confirmation"
                required="true" />
            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div>
</x-layoutAdmin>
