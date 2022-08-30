<select name="{{ $name }}" id="select-{{ $name }}">
    <option value="" selected disabled>Votre demande</option>
    @foreach ($options as $option)
        <option value="{{ $option[$valueKey] }}">
            @foreach ($labelKeys as $key)
                {{ $option[$key] }}
            @endforeach
        </option>
    @endforeach
</select>
