<li class="page-menu-item">
    <span>{{ $menu->name }}</span>
    <div class="controls c-2">
        <x-form action="{{ route('menus.destroy', $menu->id) }}" method="DELETE">
            <button type="submit" class="control red">
                Supprimer
            </button>
        </x-form>
        <a href="{{ route('menus.edit', $menu->id) }}" class="control black">
            Modifier
        </a>
    </div>
</li>
