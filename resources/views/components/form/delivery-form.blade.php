<x-form class="delivery-form spacing" action="{{ $route }}" method="{{ $method }}">
    <div class="title">
        <h2>
            {{ $delivery ? 'Édition' : 'Nouveau coupon' }}
        </h2>
    </div>
    <x-inputGroup label="Nom" name="name" type="text">
        @if ($delivery)
            {{ $delivery->name }}
        @endif
    </x-inputGroup>
    <x-inputGroup label="Code" name="code" type="text">
        @if ($delivery)
            {{ $delivery->code }}
        @endif
    </x-inputGroup>
    <x-inputGroup label="Description" name="description" type="text">
        @if ($delivery)
            {{ $delivery->description }}
        @endif
    </x-inputGroup>
    @if ($delivery)
        @if ($delivery->active == 1)
            <x-checkboxGroup label="Actif" name="active" checked />
        @else
            <x-checkboxGroup label="Actif" name="active" />
        @endif
    @else
        <x-checkboxGroup label="Actif" name="active" checked />
    @endif
    <div class="space-between button-space">
        <button type="submit" class="btn">
            {{ $delivery ? 'Modifier' : 'Ajouter' }}
        </button>
        @if ($delivery)
            <a href="{{ route('coupons.index') }}" class="btn black">Annuler</a>
        @endif
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-form>
