<div class="candidate-information">
    <h2>Candidatures</h2>
    <ul class="offers">
        @foreach ($jobOffers as $offer)
            <li class="offer">
                @if ($offer->active == 1)
                    <span class="badge">Actif</span>
                @endif
                <h4 class="name">{{ $offer->name }}</h4>
                <h4 class="count">{{ $offer->candidates->count() }}</h4>
            </li>
        @endforeach
    </ul>
    <div class="space-between">
        <a href="{{ route('offres.index') }}" class="btn">Gérer les offres</a>
        <a href="{{ route('candidature.index') }}" class="btn-invert">Gérer les candidatures</a>
    </div>
</div>
