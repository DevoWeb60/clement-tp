<div class="container" id="services-construction">
    <h2>La construction</h2>
    <p class="text">
        Nous avons de nombreuses années d’expérience dans la réalisation de nouvelles constructions,
        d’extensions de maisons, de rénovations commerciales et d’aménagements de magasins.

        Nous nous efforçons d’offrir un niveau d’excellence dans la réalisation de conceptions conceptuelles et visons
        toujours à dépasser les attentes de nos clients.
    </p>
    <ul class="constructions">
        @foreach ($constructions as $construction)
            <li>
                <x-accordion :image="$construction->image" :title="$construction->name" id="construction-{{ $construction->id }}" route="contact"
                    button="Demander un devis">
                    @if ($target == 'professionnal')
                        {{ $construction->professionnal }}
                    @elseif ($target == 'customers')
                        {{ $construction->description }}
                    @else
                        {{ $construction->description ? $construction->description : 'PRO : ' . $construction->professionnal }}
                    @endif
                </x-accordion>
            </li>
        @endforeach
    </ul>
</div>
