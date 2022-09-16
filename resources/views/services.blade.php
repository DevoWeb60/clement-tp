<x-layoutApp title="Nos Services">
    <x-servicesMain />

    <x-servicesConstruction :target="Request::get('target')" />
    <x-servicesProcess />
    <x-callToContact />
</x-layoutApp>
