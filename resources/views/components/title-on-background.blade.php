<div class="title-on-background"
    style="background-image: linear-gradient(
    to top,
    rgba(0,0,0, 0.8),
    rgba(0,0,0, 0.9)
),
url({{ $image }})">
    <h2 class="{{ $slot != '' ? null : 'center' }}">{{ $title }}</h2>
    @if ($slot != '')
        <p>{{ $slot }}</p>
    @endif
</div>
