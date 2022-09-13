<div class="container">
    <h2>Nos services</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit quasi voluptate aliquid odit
        necessitatibus maiores nihil vero, numquam quos cumque incidunt fugiat illum perferendis, nesciunt delectus
        consequatur doloremque. Aliquam.
    </p>
</div>
@if ($services)
    <ul class="activities">
        @foreach ($services as $service)
            <li>
                <x-titleOnBackground :title="$service->name" :image="$service->image" />
            </li>
        @endforeach
    </ul>
@endif
