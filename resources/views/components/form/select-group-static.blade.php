<select name="{{ $name }}" id="select-{{ $name }}">
    <option value="" {{ $selected == null ? 'selected' : null }} disabled>{{ $label }}</option>
    @foreach ($options as $option)
        <option value="{{ $option }}" {{ $selected === $option ? 'selected' : null }}>
            {{ $option }}
        </option>
    @endforeach
</select>
