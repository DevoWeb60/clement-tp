<select name="{{ $name }}" id="select-{{ $name }}">
    <option value="" selected disabled>{{ $label }}</option>
    @foreach ($options as $option)
        <option value="{{ $option[$valueKey] }}">
            @foreach ($labelKeys as $key)
                {{ $option[$key] }}
            @endforeach
        </option>
    @endforeach
</select>
