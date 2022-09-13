<x-layoutApp title="A propos">
    @if ($mainText)
        <x-titleOnBackground :title="$mainText->title" :image="$mainText->image">
            {{ $mainText->content }}
        </x-titleOnBackground>
    @endif
    @if ($aboutContents)
        <div class="container">
            @foreach ($aboutContents as $aboutContent)
                <div class="about-content">
                    <h2>{{ $aboutContent->title }}</h2>
                    <p class="text">{{ $aboutContent->content }}</p>
                </div>
            @endforeach
        </div>
    @endif
    <x-callToContact />
</x-layoutApp>
