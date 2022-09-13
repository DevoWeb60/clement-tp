<x-layoutApp title="Accueil">
    <x-homeTarget />
    <x-homeAbout />
    @if ($presentations)
        <div class="container">
            <ul class="presentation">
                @foreach ($presentations as $presentation)
                    <x-homePresentation :link="$presentation->link" :title="$presentation->title" :image="$presentation->image">
                        {{ $presentation->content }}
                    </x-homePresentation>
                @endforeach
            </ul>
        </div>
    @endif
    <x-callToContact />
</x-layoutApp>
