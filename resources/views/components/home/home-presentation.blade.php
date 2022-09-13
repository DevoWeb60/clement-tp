<li>
    <div class="thumb">
        <img src="{{ asset("storage/$image") }}" alt="{{ $title }}">
    </div>
    <h2>{{ $title }}</h2>
    <p class="text">{{ $slot }}</p>
    <a href="{{ $link }}" class="btn">En savoir plus</a>
</li>
