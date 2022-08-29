<div class="input-group">
    @if ($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" placeholder="{{ $label }}"
            required="{{ $required }}"></textarea>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="input-{{ $name }}"
            placeholder="{{ $label }}" required="{{ $required }}">
    @endif
    <label for="input-{{ $name }}">{{ $label }}</label>
</div>
