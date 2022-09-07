<x-layoutAdmin title="Services">
    <div id="index-services">
        <div class="title">
            <h2>Page : Nos services</h2>
        </div>
        <div class="container">
            <x-servicesList />
            <x-servicesForm :service="$service">
                <x-alert />
            </x-servicesForm>
        </div>
    </div>
</x-layoutAdmin>
