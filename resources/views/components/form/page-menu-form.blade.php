<x-form action="{{ route('menus.update', $menu) }}" method="PUT">
    <div class="title">
        <h2>Édition : {{ $menu->name }}</h2>
    </div>
    <x-inputGroup name="name" :value="$menu->name" label="Nom de la page" type="text">
        {{ $menu->name }}
    </x-inputGroup>
    <div class="checkboxs">
        @if ($menu->header == 1)
            <x-checkboxGroup name="header" label="En tête" checked />
        @else
            <x-checkboxGroup name="header" label="En tête" />
        @endif
        @if ($menu->footer == 1)
            <x-checkboxGroup name="footer" label="Pied de page" checked />
        @else
            <x-checkboxGroup name="footer" label="Pied de page" />
        @endif
    </div>
    <div class="space-between">
        <a href="{{ route('menus.index') }}" class="btn black">Annuler</a>
        <button type="submit" class="btn">Modifier</button>
    </div>
</x-form>
