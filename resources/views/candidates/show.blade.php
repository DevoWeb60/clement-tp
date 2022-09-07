<x-layoutAdmin :title="$candidature->lastname">
    <div id="show-candidates">
        <div class="container">
            <div class="candidate">
                <div class="header-candidate">
                    <div class="info">
                        <h2>{{ $candidature->firstname }} {{ $candidature->lastname }}
                            @if ($candidature->status)
                                <span class="muted">{{ $candidature->status->name }}</span>
                            @endif
                        </h2>
                        <h4>Pour le poste de <strong>{{ $candidature->jobOffer->name }}</strong></h4>
                    </div>
                    <div class="contact-info">
                        <x-mailTo :mail="$candidature->email" />
                        <x-callPhoneNumber :phoneNumber="$candidature->phone" />
                    </div>
                </div>
                @if ($candidature->message)
                    <article class="motivation">
                        <h2>Motivation</h2>
                        <p>{{ $candidature->message }}</p>
                    </article>
                @endif
                <a href="{{ Storage::url($candidature->file) }}" target="_blank" class="btn black">CV PDF</a>
            </div>
            <div class="controls c-3">
                <a href="{{ route('candidature.index', ['id' => $candidature->job_offer_id]) }}"
                    class="control black">Retour</a>
                <a href="{{ route('offres.index') }}" class="control grey">Retour aux offres</a>
                <x-form action="{{ route('candidature.destroy', $candidature->id) }}" method="DELETE">
                    <button type="submit" class="control red">Supprimer</button>
                </x-form>
            </div>
        </div>
        <x-form class="status-form" action="{{ route('candidature.update', $candidature) }}" method="PUT">
            <x-selectGroup :name="'states_id'" :options="$states" label="Modifier le status" valueKey="id"
                :labelKeys="['name']" required="true" />
            <button type="submit" class="btn">Valider</button>
        </x-form>
    </div>
</x-layoutAdmin>
