<div class="accordion">
    <div class="header-accordion">
        <h3>
            {{ $title }}
        </h3>
        <img src="{{ asset('storage/svg/arrow.svg') }}" alt="{{ $title }}" class="svg">
    </div>
    <div class="content-accordion">
        @if ($image)
            <img src="{{ asset('storage/webp/' . $image) }}" alt="{{ $title }}">
        @endif
        <p>
            {{ $slot }}
        </p>
        <a href="{{ route($route) }}" class="btn">{{ $button }}</a>
    </div>
</div>
