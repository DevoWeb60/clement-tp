<x-layoutAdmin title="Mon compte">
    <div id="index-user">
        <div class="title">
            <h2>Mon Compte</h2>
        </div>
        <div class="container">
            <x-form action="{{ route('utilisateurs.update', ['utilisateur' => $user]) }}" method="PUT">
                <x-inputGroup label="Nom" name="lastname" type="text">
                    {{ $user->lastname ?? '' }}
                </x-inputGroup>
                <x-inputGroup label="Nom" name="firstname" type="text">
                    {{ $user->firstname ?? '' }}
                </x-inputGroup>
                <x-inputGroup label="Email" name="email" type="email">
                    {{ $user->email ?? '' }}
                </x-inputGroup>
                <x-inputGroup label="Nouveau mot de passe" name="password" type="password" />
                <x-inputGroup label="Retapez le mot de passe" name="password_confirmation" type="password" />
                <div class="space-between">
                    <span></span>
                    <button type="submit" class="btn">Valider</button>
                </div>
            </x-form>
        </div>
    </div>
</x-layoutAdmin>
