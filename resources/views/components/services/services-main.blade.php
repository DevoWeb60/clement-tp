<div class="container">
    <h2>Nos services @if (Request::get('target') == 'professionnal')
            pour professionnels
        @elseif(Request::get('target') == 'customers')
            pour particuliers
        @endif
    </h2>
    </h2>
    <p class="text">
        Nous sommes fiers du niveau amélioré de service personnalisé que nous offrons à nos clients, en particulier en
        ce qui concerne la réalisation de tous les aspects du brief et du budget. Nous nous efforçons d’atteindre
        uniquement les normes les plus élevées de conception et de construction, indépendamment de l’échelle et de la
        complexité.
    </p>
</div>
@if ($services)
    @if (Request::get('target') != 'professionnal')
        <ul class="activities">
            @foreach ($services as $service)
                <li>
                    <x-titleOnBackground :title="$service->name" :image="$service->image" />
                </li>
            @endforeach
        </ul>
    @endif
@endif
