<x-layoutApp title="Contact">

    <div class="container">
        <div class="title">
            <h2>Contact</h2>
            <h3>Demande de devis ou renseignements</h3>
            <h3>Laissez nous un message !</h3>
        </div>
        <x-formContact />
        <ul class="coords">
            <li>
                <img class="svg" src="{{ asset('storage/svg/map.svg') }}" alt="{{ $siteInfo->address }} BTP">
                <a href="{{ $siteInfo->google_link }}" target="_blank">{{ $siteInfo->address }}</a>
            </li>
            <li>
                <img class="svg" src="{{ asset('storage/svg/phone.svg') }}"
                    alt="Clément TP Construction rénovation extentions">
                <x-callPhoneNumber class="phone" :phoneNumber="$siteInfo->phone" />
            </li>
            <li>
                <img class="svg" src="{{ asset('storage/svg/mail.svg') }}"
                    alt="Architecture plan permis de construire 3D bâtiments">
                <x-mailTo class="email" :mail="$siteInfo->email" />
            </li>
        </ul>
    </div>
    <x-iframe :iframe="$siteInfo->iframe_map ?? ''" />
</x-layoutApp>
