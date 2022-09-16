<x-layoutApp title="A propos">
    @if ($mainText)
        <div id="about-main">
            <x-titleOnBackground :title="$mainText->title" :image="$mainText->image">
                {{ $mainText->content }}
            </x-titleOnBackground>
        </div>
    @endif
    @if ($aboutContents)
        <div id="about-content">
            <div class="container">
                @foreach ($aboutContents as $aboutContent)
                    <x-textBox :title="$aboutContent->title">
                        {{ $aboutContent->content }}
                    </x-textBox>
                    {{-- <div class="about-content">
                        <h2>{{ $aboutContent->title }}</h2>
                        <p class="text">{{ $aboutContent->content }}</p>
                    </div> --}}
                @endforeach
            </div>
        </div>
    @endif
    <x-callToContact />
</x-layoutApp>
