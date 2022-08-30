<div class="sub-header">
    <ul>
        @foreach ($subMenus as $entry)
            <li><a href="{{ route($entry['link']) }}">{{ $entry['name'] }}</a></li>
        @endforeach
    </ul>
</div>
