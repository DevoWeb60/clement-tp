<div class="input-file">
    <div class="input-group">
        <input type="file" name="{{ $name }}" id="{{ $name }}" />
        <label for="{{ $name }}">{{ $label }}</label>
    </div>
    <div class="preview">
        @if ($slot != '')
            <img src="{{ asset('storage/' . $slot) }}" alt="Preview" />
        @endif
    </div>
</div>
