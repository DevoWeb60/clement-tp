<x-form action="{{ $action }}" method="{{ $method }}">
    <div class="title">
        <h3>{{ $object ? 'Édition : ' . $object->name : 'Nouveau objet' }}</h3>
    </div>
    <x-inputGroup label="Nom" name="name" type="text">
        {{ $object->name ?? '' }}
    </x-inputGroup>
    <div class="space-between">
        @if ($object)
            <a href="{{ route('objets.index') }}" class="btn black">Annuler</a>
        @else
            <span></span>
        @endif
        <button type="submit" class="btn">
            {{ $object ? 'Modifier' : 'Ajouter' }}
        </button>
    </div>
</x-form>
