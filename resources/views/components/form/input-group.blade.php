<div {{ $attributes->merge(['class' => 'input-group']) }}>
    @if ($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" placeholder="{{ $label }}"></textarea>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="input-{{ $name }}"
            placeholder="{{ $label }}" value="{{ $slot }}">
    @endif
    <label for="input-{{ $name }}">{{ $label }}</label>
</div>
