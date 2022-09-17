<x-layoutAdmin title="Candidatures">
    <div id="index-candidates">
        <div class="container">
            <div class="title">
                <h2>Candidatures
                </h2>
                @if ($jobOffer)
                    <h3>Poste : <strong>{{ $jobOffer->name }}</strong> à <strong>{{ $jobOffer->city }}</strong>

                    </h3>
                @endif
                <div class="space-between">
                    <span></span>
                    <a href="{{ route('offres.edit', $jobOffer) }}" class="btn black">Editer cette offre</a>
                </div>
            </div>
            <ul class="galery">
                @foreach ($candidates as $candidate)
                    <li class="card">
                        <div class="space-between row">
                            <h2>{{ $candidate->firstname }} {{ $candidate->lastname }}</h2>
                            @if (!$jobOffer)
                                <a
                                    href="{{ route('candidature.index', ['id' => $candidate->jobOffer->id]) }}">{{ $candidate->jobOffer->name }}</a>
                            @endif
                        </div>
                        @if ($candidate->status)
                            <span class="badge">{{ $candidate->status->name }}</span>
                        @endif
                        <ul>
                            @if ($candidate->phone)
                                <li>
                                    Téléphone :
                                    <x-callPhoneNumber :phoneNumber="$candidate->phone" />
                                </li>
                            @endif
                            <li>
                                Adresse Mail :
                                <x-mailTo :mail="$candidate->email" />
                            </li>
                        </ul>
                        <div class="actions">
                            <a href="{{ route('candidature.show', $candidate) }}" class="btn-invert black">Voir</a>
                            <x-deleteButton route="candidature.destroy" :element="$candidate" :isButton="true"
                                class="btn red" />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <x-backButton route="offres.index">
        Retour aux offres
    </x-backButton>
</x-layoutAdmin>
