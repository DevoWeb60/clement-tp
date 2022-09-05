<x-layoutAdmin title="Menus">
    <div id="index-page-menus">
        <div class="title">
            <h2>Menus</h2>
        </div>
        <div class="container row ">
            <x-pageMenuList />
            <div class="main">
                @if ($id)
                    <x-pageMenuForm :id="$id" />
                @endif
                <ul class="menu-list">
                    @foreach ($pageMenus as $menu)
                        <li class="space-between row">
                            <h3>{{ $menu->name }}</h3>
                            <span>
                                @if ($menu->header == 1)
                                    En tête <br>
                                @endif
                                @if ($menu->footer == 1)
                                    Pied de page
                                @endif
                            </span>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn black">Modifier</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layoutAdmin>
