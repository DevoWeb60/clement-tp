<x-layoutAdmin title="Offres d'emplois">
    <div id="index-offer">
        <div class="container">
            <div class="title">
                <h2 class="space-between row">Offres d'emplois
                    <small>
                        <a href="{{ route('offres.create') }}" class="btn">Ajouter</a>
                    </small>
                </h2>
            </div>
            <ul class="galery">
                @foreach ($jobOffers as $offre)
                    <li class="card {{ $offre->active == 1 ? 'active' : null }}">
                        @if ($offre->active == 1)
                            <span class="badge">
                                Actif
                            </span>
                        @endif
                        <h2>{{ $offre->name }}</h2>
                        <h4 class="muted">{{ $offre->city }}</h4>
                        <p>Salaire : {{ $offre->salary }} €/mois</p>
                        <p class="m0">Compétence :</p>
                        <ul class="list">
                            @foreach ($offre->skills as $skill)
                                <li>{{ $skill }}</li>
                            @endforeach
                        </ul>

                        <div class="space-between">
                            <a href="{{ route('candidature.index', ['id' => $offre->id]) }}"
                                class="btn-invert">Candidats</a>
                            <a href="{{ route('offres.edit', $offre->id) }}" class="btn black">Éditer</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layoutAdmin>
