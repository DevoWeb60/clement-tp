<div class="services-list">
    <ul>
        @foreach ($services as $service)
            <li>
                <div class="sub-container">
                    <div class="service-header">
                        <h3>
                            {{ $service->name }}
                        </h3>
                        <p>
                            {{ $service->type }}
                        </p>
                    </div>
                    @if ($service->description)
                        <p class="text muted">{{ substr($service->description, 0, 50) }}</p>
                    @else
                        @if ($service->professionnal)
                            <p class="text muted">PRO : {{ substr($service->professionnal, 0, 50) }}...</p>
                        @endif
                    @endif
                </div>
                <div class="controls c-2">
                    <x-form action="{{ route('services.destroy', $service->id) }}" method="DELETE">
                        <button type="submit" class="control red">Supprimer</button>
                    </x-form>
                    <a href="{{ route('services.edit', $service->id) }}" class="control black">Modifier</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
