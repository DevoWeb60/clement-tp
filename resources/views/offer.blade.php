<x-layoutApp :title="$offer->name">
    <div class="container">
        <div class="title">
            <h2>
                {{ $offer->name }}
                <br>
                <span class="muted">
                    {{ $offer->city }}
                </span>
            </h2>
        </div>
    </div>
    <div class="offer">
        <div class="container">
            <p class="description">
                {{ $offer->description }}
            </p>
            <div class="skills">
                <h3>Pré-requis</h3>
                <ul>
                    @foreach ($skills as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="earn">
                <h3>Salaire</h3>
                <p>{{ $offer->salary }}</p>
            </div>
            <div class="location">
                <h3>Prise de poste</h3>
                <p>{{ $offer->city }}</p>
            </div>
        </div>
        <x-iframe :iframe="$offer->iframe_map ?? ''" />
    </div>
    <div class="container">
        <x-form method="POST" action="{{ route('candidature.store') }}" class="form-offer"
            enctype="multipart/form-data">
            <input type="hidden" name="job_offer_id" value="{{ $offer->id }}">
            <div class="col-2">
                <x-inputGroup label="Nom" name="lastname" type="text" required="true" />
                <x-inputGroup label="Prénom" name="firstname" type="text" required="true" />
            </div>
            <x-inputGroup label="Adresse mail" name="email" type="email" required="true" />
            <x-inputGroup label="Téléphone" name="phone" type="tel" required="true" />
            <x-inputGroup label="Motivation" name="motivation" type="textarea" required="true" />
            <x-inputFileGroup label="CV" name="file" />
            <button type="submit" class="btn">Soumettre</button>
        </x-form>
    </div>
</x-layoutApp>
