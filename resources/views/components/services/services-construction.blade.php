<div class="container" id="services-construction">
    <h2>La construction</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit quasi voluptate aliquid odit
        necessitatibus maiores nihil vero, numquam quos cumque incidunt fugiat illum perferendis, nesciunt delectus
        consequatur doloremque. Aliquam.
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
