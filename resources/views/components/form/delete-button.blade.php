<x-form action="{{ route($route, $element->id) }}" method="DELETE"
    class="{{ $isButton ? 'button' : null }} delete-verif">
    <button {{ $attributes }} class="control red">Supprimer</button>
</x-form>
