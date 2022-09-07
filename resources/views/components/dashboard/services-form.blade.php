<x-form action="{{ $action }}" method="{{ $method }}" enctype="multipart/form-data">
    <div class="title">
        <h3>{{ $service ? 'Édition : ' . $service->name : 'Nouveau service' }}</h3>
    </div>
    {{ $slot }}
    <x-selectGroupStatic label="Choisir la section" :options="$options" name="type" :selected="$service ? $service->type : null" />
    <x-inputGroup label="Nom du service" name="name" type="text">
        {{ $service ? $service->name : '' }}
    </x-inputGroup>
    <div class="space-between">
        <x-inputGroup label="Description Particulier" name="description" type="textarea">
            {{ $service ? $service->description : '' }}
        </x-inputGroup>
        <x-inputGroup label="Description Professionnel" name="professionnal" type="textarea">
            {{ $service ? $service->professionnal : '' }}
        </x-inputGroup>
    </div>
    <x-inputFileGroup label="Image" name="image">
        {{ $service ? $service->image : '' }}
    </x-inputFileGroup>
    <div class="space-between">
        @if ($service)
            <a href="{{ route('services.index') }}" class="btn black">Annuler</a>
        @endif
        <button type="submit" class="btn">Valider</button>
    </div>
</x-form>
