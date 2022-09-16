<div class="container">
    <h2>Nos services @if (Request::get('target') == 'professionnal')
            pour professionnels
        @elseif(Request::get('target') == 'customers')
            pour particuliers
        @endif
    </h2>
    </h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit quasi voluptate aliquid odit
        necessitatibus maiores nihil vero, numquam quos cumque incidunt fugiat illum perferendis, nesciunt delectus
        consequatur doloremque. Aliquam.
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
