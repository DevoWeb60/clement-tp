<x-layoutAdmin title="Nouvelle offre">
    <div id="create-job-offers">
        <div class="title">
            <h2>{{ $jobOffer ? 'Édition : ' . $jobOffer->name : "Nouvelle offre d'emploi" }}</h2>
        </div>
        <div class="container">
            <x-jobOfferForm :jobOffer="$jobOffer" />
        </div>
    </div>
</x-layoutAdmin>
