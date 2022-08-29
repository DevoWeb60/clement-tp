<li>
    <div class="thumb">
        <img src="{{ asset("storage/webp/$image") }}" alt="{{ $title }}">
    </div>
    <h2>{{ $title }}</h2>
    <p>
        {{ $slot }}
    </p>
    <a href="{{ route($link) }}" class="btn">En savoir plus</a>
</li>
