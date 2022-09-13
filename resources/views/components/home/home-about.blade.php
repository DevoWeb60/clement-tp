@if ($contents)
    <section id="home-about">
        @foreach ($contents as $content)
            <div class="container">
                <div class="content">
                    <h2>{{ $content->title }}</h2>
                    <p class="text">{{ $content->content }}</p>
                    <a href={{ $content->link }}" class="btn">{{ $content->link_text }}</a>
                </div>
            </div>
            @if ($content->image)
                <div class="thumb">
                    <img src="{{ asset('storage/' . $content->image) }}" alt="BTP professionnelle et particulier">
                </div>
            @endif
        @endforeach
    </section>
@endif
