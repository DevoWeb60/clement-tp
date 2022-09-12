<x-layoutAdmin title="Paramètres">
    <div id="index-general">
        <div class="title">
            <h2>Paramètres</h2>
        </div>
        <div class="container">
            <x-form action="{{ route('general.update', ['general' => $siteInfo]) }}" method="PUT"
                enctype="multipart/form-data">
                <div class="form-part">
                    <h3>Général</h3>
                    <x-inputGroup label="Nom du site" name="title" type="text">
                        {{ $siteInfo->title ?? '' }}
                    </x-inputGroup>
                    <x-inputGroup label="Description du site" name="description" type="textarea">
                        {{ $siteInfo->description ?? '' }}
                    </x-inputGroup>
                    <div class="space-between">
                        <x-inputGroup label="Téléphone" name="phone" type="text">
                            {{ $siteInfo->phone ?? '' }}
                        </x-inputGroup>
                        <x-inputGroup label="Email" name="email" type="email">
                            {{ $siteInfo->email ?? '' }}
                        </x-inputGroup>
                    </div>
                    <div class="address-container">
                        <x-inputGroup label="Adresse" name="address" type="text">
                            {{ $siteInfo->address ?? '' }}
                        </x-inputGroup>
                        <a href="https://www.google.com/maps/search/{{ $siteInfo->address }}" target="_blank"
                            class="btn black">Google Maps</a>
                    </div>
                    <x-inputGroup label="Lien Google Map (Partager > Envoyer un lien)" name="google_link"
                        type="text">
                        {{ $siteInfo->google_link ?? '' }}
                    </x-inputGroup>
                    <div class="space-between iframe">
                        <x-inputGroup label="Carte Google (Partager > Intégrer une carte)" name="iframe_map"
                            type="textarea">
                            {{ $siteInfo->iframe_map ?? '' }}
                        </x-inputGroup>
                        <x-iframe :iframe="$siteInfo->iframe_map ?? ''" />
                    </div>
                </div>
                <div class="space-between settings-part">
                    <div class="form-part">
                        <h3>Identité visuelle</h3>
                        <x-inputFileGroup label="Logo" name="logo">
                            {{ $siteInfo->logo ?? '' }}
                        </x-inputFileGroup>
                        <x-inputFileGroup label="Favicon (logo d'onglet)" name="favicon">
                            {{ $siteInfo->favicon ?? '' }}
                        </x-inputFileGroup>
                    </div>
                    <div class="form-part">
                        <h3>Réseaux sociaux</h3>
                        <x-inputGroup label="Facebook" name="facebook" type="text">
                            {{ $siteInfo->facebook ?? '' }}
                        </x-inputGroup>
                        <x-inputGroup label="Instagram" name="instagram" type="text">
                            {{ $siteInfo->instagram ?? '' }}
                        </x-inputGroup>
                        <x-inputGroup label="Pinterest" name="pinterest" type="text">
                            {{ $siteInfo->pinterest ?? '' }}
                        </x-inputGroup>
                        <x-inputGroup label="Linkedin" name="linkedin" type="text">
                            {{ $siteInfo->linkedin ?? '' }}
                        </x-inputGroup>
                    </div>
                </div>
                <div class="space-between submit">
                    <span></span>
                    <button type="submit" class="btn">Valider</button>
                </div>
            </x-form>
        </div>
    </div>
</x-layoutAdmin>
