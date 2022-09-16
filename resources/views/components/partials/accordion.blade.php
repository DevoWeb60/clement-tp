<div class="accordion">
    <div class="header-accordion">
        <h3>
            {{ $title }}
        </h3>
        <img src="{{ asset('storage/svg/arrow.svg') }}" alt="{{ $title }}" class="svg">
    </div>
    <div class="content-accordion">
        @if ($image)
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $title }}">
        @endif
        <div class="content-text">
            <p class="text">{{ $slot }}</p>
            <div class="space-between">
                <span></span>
                <a href="{{ route($route) }}" class="btn-invert">{{ $button }}</a>
            </div>
        </div>
    </div>
</div>
