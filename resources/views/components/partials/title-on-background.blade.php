<div class="title-on-background"
    style="background-image: linear-gradient(
    to top,
    rgba(0,0,0, 0.7),
    rgba(0,0,0, 0.8)
),
url({{ asset('storage/' . $image) }})">
    <div class="container">
        <h2 class="{{ $slot != '' ? null : 'center' }}">{{ $title }}</h2>
        @if ($slot != '')
            <p class="text">{{ $slot }}</p>
        @endif
    </div>
</div>
