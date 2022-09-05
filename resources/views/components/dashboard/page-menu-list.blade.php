<div class="page-menu-list">
    <ul class="header">
        <h2>En tête</h2>

        @foreach ($pageMenus as $menu)
            @if ($menu->header == 1)
                <li>{{ $menu->name }}</li>
            @endif
        @endforeach
    </ul>
    <ul class="footer">
        <h2>Pied de page</h2>

        @foreach ($pageMenus as $menu)
            @if ($menu->footer == 1)
                <li>{{ $menu->name }}</li>
            @endif
        @endforeach
    </ul>
</div>
