<div class="input-radio-group">
    <label class="main-label" for="{{ $name }}">{{ $mainLabel }}</label>
    <ul class="radios">
        @foreach ($options as $key => $option)
            <li class="label-radio">
                <input type="radio" name="{{ $name }}" value="{{ $option['link'] }}"
                    {{ route($option['link']) == $slot ? 'checked' : '' }}>
                <span class="label-text">{{ $option['name'] }}</span>
            </li>
        @endforeach
    </ul>
</div>
