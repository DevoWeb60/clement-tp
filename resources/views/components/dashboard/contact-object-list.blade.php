<ul class="contact-object-list">
    @foreach ($objects as $object)
        <li class="object">
            <span>
                {{ $object->name }}
            </span>
            <span class="btn-container">
                <a href="{{ route('objets.edit', $object) }}" class="btn black">Modifier</a>
                <x-form class="button" action="{{ route('objets.destroy', $object) }}" method="DELETE">
                    <button type="submit" class="btn red">Supprimer</button>
                </x-form>
            </span>
        </li>
    @endforeach
</ul>
