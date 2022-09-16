<x-form action="{{ $action }}" method="{{ $method }}">
    <x-inputGroup label="Nom de l'offre" name="name" type="text">
        {{ $jobOffer->name ?? '' }}
    </x-inputGroup>
    <x-inputGroup label="Pré-requis (séparées par des virgules)" name="skills" type="textarea">
        {{ $jobOffer->skills ?? '' }}
    </x-inputGroup>
    <div class="space-between main">
        <x-inputGroup class="description" label="Description" name="description" type="textarea">
            {{ $jobOffer->description ?? '' }}
        </x-inputGroup>
        <div class="infos">
            <x-inputGroup label="Salaire (en €/mois)" name="salary" type="number">
                {{ $jobOffer->salary ?? '' }}
            </x-inputGroup>
            <div class="space-between row city-container">
                <x-inputGroup label="Ville" name="city" type="text" class="city">
                    {{ $jobOffer->city ?? '' }}
                </x-inputGroup>
                <a target="_blank" href="https://www.google.fr/maps/place/{{ $jobOffer->city ?? '' }}"
                    class="btn black">
                    Google Maps
                </a>
            </div>
            <div class="iframe">
                <x-inputGroup label="Carte google" name="iframe_map" type="textarea">
                    {{ $jobOffer->iframe_map ?? '' }}
                </x-inputGroup>
                @if ($jobOffer)
                    @if ($jobOffer->iframe_map)
                        <x-iframe :iframe="$jobOffer->iframe_map ?? ''" />
                    @endif
                @endif
            </div>
        </div>
    </div>
    <div class="checkbox-container">
        @if ($jobOffer)
            @if ($jobOffer->active == 1)
                <x-checkboxGroup name="active" label="Actif" checked />
            @else
                <x-checkboxGroup name="active" label="Actif" />
            @endif
        @else
            <x-checkboxGroup name="active" label="Actif" checked />
        @endif
    </div>
    <div class="space-between">
        <a href="{{ route('offres.index') }}" class="btn black">Annuler</a>
        @if ($jobOffer)
            <x-form action="{{ route('offres.destroy', ['offre' => $jobOffer]) }}" method="DELETE" class="button">
                <button type="submit" class="btn red">Supprimer</button>
            </x-form>
        @endif
        <button type="submit" class="btn">Valider</button>
    </div>
</x-form>
