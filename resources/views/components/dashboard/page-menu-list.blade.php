<div class="page-menu-list">
    <ul class="header">
        @foreach ($pageMenus as $menu)
            @if ($menu->header == 1)
                <x-pageMenuItem :menu='$menu' />
            @endif
        @endforeach
    </ul>
    <ul class="footer">
        @foreach ($pageMenus as $menu)
            @if ($menu->footer == 1)
                <x-pageMenuItem :menu='$menu' />
            @endif
        @endforeach
    </ul>
</div>
